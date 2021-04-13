<?php

namespace App\Http\Controllers;

use App\Http\Requests\SewaMobilRequest;
use App\Http\Requests\UserRequest;
use App\Mobil;
use App\Tipe;
use App\Transaksi;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TransaksiRequest;
use App\Http\Requests\PelangganRequest;
use DateTime;
use Carbon\Carbon;


use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tb_mobil = DB::table('tb_mobil')->get();
        // if ($request->session()->has('name')) {
        //     echo $request->session()->get('name');
        // } else {
        //     echo 'Tidak ada data dalam session.';
        // }
        /*  dump($car);*/
        return view('user.index', ['tb_mobil' => $tb_mobil], compact('request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $tb_mobil = DB::table('tb_mobil')->where('id', $id)->first();

        $tb_transaksi = Transaksi::with(['user', 'mobil'])->get();

        return view('user.transaksi', compact('tb_mobil', 'tb_transaksi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(SewaMobilRequest $request)
    public function store(SewaMobilRequest $request, $id)
    {
        // dd($request->validated());

        // $data = $request->validated();
        // $data['id_plg'] = Auth::user()->id;

        // Transaksi::create($data);

        // return redirect('/user/')->with('status', 'Mobil Berhasil Disewa');

        $transaksi = new Transaksi;
        $transaksi->id_plg = Auth::user()->id;
        $transaksi->id_mobil = $id;
        $transaksi->tgl_rental = $request->input('tgl_rental');
        $transaksi->tgl_kembali = $request->input('tgl_kembali');
        $transaksi->pengambilan = $request->input('pengambilan');
        $transaksi->save();

        return redirect('/')->with('status', 'Mobil Berhasil Disewa, Silahkan Cek di My Profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tb_mobil = DB::table('tb_mobil')->where('id', $id)->first();
        return view('user.show', compact('tb_mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $pelanggan)
    {

        return view('user.edit_profil', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        // dd('tsting');

        $data = $request->validated();
        User::where('id', $id)->update($data);
        return redirect('user/profile')->with('status', 'Data Penyewa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // $tb_transaksi = Transaksi::with(['user', 'mobil'])->get();
        DB::table('tb_trx')->where('id', $id)->delete();
        return redirect('/user/profile')->with('status', 'Data Berhasil Dihapus');
    }
    public function profile()
    {
        $pelanggan = auth()->user();
        $daftar_sewa = DB::table('tb_trx')
            ->where('tb_trx.id_plg', '=', auth()->user()->id)
            ->join('tb_mobil', 'tb_trx.id_mobil', '=', 'tb_mobil.id')
            ->select(
                'tb_trx.id as id',
                'tb_mobil.merek as merek',
                'tb_trx.tgl_rental as tgl_rental',
                'tb_trx.tgl_kembali as tgl_kembali',
                'tb_trx.pengambilan as pengambilan',
                'tb_mobil.harga as harga'

            )
            ->get();
        return view('user.profile', compact('pelanggan', 'daftar_sewa'));
    }
    public function print($id)
    {
        $id_mobil = Transaksi::where('id', $id)->first()->id_mobil;
        // $id_trx = Transaksi::where('id', $id)->first()->id_mobil;

        // DB::table('tb_trx')->where('id', $id)->get();
        $pelanggan = auth()->user();
        $tb_transaksi = Transaksi::with('mobil')->where('id_mobil', $id_mobil)->first();
        $tb_trx = Transaksi::with('mobil')->where('id', $id)->first();
        // dd($tb_transaksi);
        $daftar_sewa = DB::table('tb_trx')
            ->where('tb_trx.id', '=', $id)
            ->join('tb_mobil', 'tb_trx.id_mobil', '=', 'tb_mobil.id')
            ->select(


                'tb_trx.tgl_rental as tgl_rental',
                'tb_trx.tgl_kembali as tgl_kembali'

            )
            ->first();

        return view('user.cetak_bukti', compact('tb_trx', 'pelanggan', 'daftar_sewa'));
    }
}
