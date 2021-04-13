<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\Mobil;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\TransaksiRequest;
use App\Http\Requests\TTransaksiRequest;
use App\Exports\TransaksiExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\User;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar_sewa = DB::table('tb_trx')
            ->join('users', 'tb_trx.id_plg', '=', 'users.id')
            ->join('tb_mobil', 'tb_trx.id_mobil', '=', 'tb_mobil.id')
            ->select([
                'tb_trx.id as id',
                'users.name as name',
                // 'tb_mobil.merek as merek',
                'tb_mobil.no_plat as no_plat',
                'tb_trx.tgl_rental as tgl_rental',
                'tb_trx.tgl_kembali as tgl_kembali',
                'tb_trx.tgl_pengembalian as tgl_pengembalian',
                'tb_trx.pengambilan as pengambilan',
                'tb_trx.status_sewa as status_sewa',
                'tb_trx.status_kembali as status_kembali',
                'tb_mobil.harga as harga'
            ])
            ->paginate(10);
        $tb_transaksi = Transaksi::with(['user', 'mobil'])->paginate(10);
        return view('transaksi.index', compact('tb_transaksi', 'daftar_sewa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tb_transaksi = DB::table('tb_trx')
            ->join('tb_mobil', 'tb_trx.id_mobil', 'tb_mobil.id')
            ->join('users', 'tb_trx.id_plg', 'users.id')
            ->get();
        $users = \App\User::all();
        $tb_mobil = \App\Mobil::all();

        return view('transaksi.tambah', compact('tb_transaksi', 'users', 'tb_mobil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TTransaksiRequest $request)
    {
        $transaksi = new Transaksi;
        $transaksi->id_plg = $request->input('id_plg');
        $transaksi->id_mobil = $request->input('id_mobil');
        $transaksi->tgl_rental = $request->input('tgl_rental');
        $transaksi->tgl_kembali = $request->input('tgl_kembali');
        $transaksi->pengambilan = $request->input('pengambilan');
        $transaksi->status_sewa = $request->input('status_sewa');
        $transaksi->save();
        return redirect('/transaksi')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {

        $tb_transaksi = DB::table('tb_trx')
            ->join('tb_mobil', 'tb_trx.id_mobil', 'tb_mobil.id')
            ->join('users', 'tb_trx.id_plg', 'users.id')
            ->get();
        $users = \App\User::all();
        $tb_mobil = \App\Mobil::all();

        return view('transaksi.edit', compact('tb_transaksi', 'users', 'tb_mobil', 'transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransaksiRequest $request, $id)
    {
        // dd($request);

        $data = $request->validated();
        $id_mobil = $data['id_mobil'];

        // $mobil = Mobil::find($id_mobil);
        // $harga_mobil = $mobil->harga;
        // dd($harga_mobil);
        // $date1     = date_create($transaksi->tgl_rental);
        // $date2   = date_create($transaksi->tgl_pengembalian);
        // $cek_telat = date_diff($date1, $date2);
        // $telat   = $cek_telat->format("%a");
        // if ($telat > 0) {
        //     $total_harga = $telat * ($harga_mobil);
        // } else {
        //     $total_harga = 1 * ($harga_mobil);
        // }

        // $data['total_harga'] = $total_harga;
        Transaksi::where('id', $id)->update($data);
        // dd($data);
        return redirect('/transaksi')->with('status', 'Data Transaksi Mobil Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_trx')->where('id', $id)->delete();
        return redirect('/transaksi')->with('status', 'Data Berhasil Dihapus');
    }
    public function export_excel()
    {
        return Excel::download(new TransaksiExport, 'transaksi.xlsx');
    }
    public function print()
    {
        $tb_transaksi = DB::table('tb_trx')
            ->join('tb_mobil', 'tb_trx.id_mobil', 'tb_mobil.id')
            ->join('users', 'tb_trx.id_plg', 'users.id')
            ->get();
        // $pdf = Transaksi::loadview('transaksi.cetak')->setPaper('A4', 'potrait');
        // return $pdf->stream();
        return view('transaksi.cetak', compact('tb_transaksi'));
    }
    public function cari(Request $request)
    {

        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $daftar_sewa = DB::table('tb_trx')

            ->join('users', 'tb_trx.id_plg', '=', 'users.id')
            ->join('tb_mobil', 'tb_trx.id_mobil', '=', 'tb_mobil.id')
            ->select(
                'tb_trx.id as id',
                'users.name as name',
                // 'tb_mobil.merek as merek',
                'tb_mobil.no_plat as no_plat',
                'tb_trx.tgl_rental as tgl_rental',
                'tb_trx.tgl_kembali as tgl_kembali',
                'tb_trx.tgl_pengembalian as tgl_pengembalian',
                'tb_trx.pengambilan as pengambilan',
                'tb_trx.status_sewa as status_sewa',
                'tb_trx.status_kembali as status_kembali',
                'tb_mobil.harga as harga'

            )
            ->where('tgl_rental', 'like', "%" . $cari . "%")
            ->orwhere('name', 'like', "%" . $cari . "%")
            ->orwhere('no_plat', 'like', "%" . $cari . "%")
            ->orwhere('tgl_kembali', 'like', "%" . $cari . "%")
            ->orwhere('tgl_pengembalian', 'like', "%" . $cari . "%")
            ->orwhere('status_sewa', 'like', "%" . $cari . "%")
            ->orwhere('status_kembali', 'like', "%" . $cari . "%")
            ->get();

        $tb_transaksi = Transaksi::with(['user', 'mobil'])->paginate(10);

        // mengirim data pegawai ke view index
        return view('transaksi.index', compact('daftar_sewa', 'tb_transaksi'));
    }
}
