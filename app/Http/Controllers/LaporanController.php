<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Http\Requests\TransaksiRequest;
use Illuminate\Support\Facades\DB;
use App\PDFGenerate;
use PDF;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Dompdf\Adapter\PDFLib;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Transaksi Pesanan';
        $data = Transaksi::orderBy('created_at', 'desc')->get();
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
        // $tb_trx = DB::table('tb_trx')->count('id');
        // return view('laporan.index', compact('title', 'data', 'daftar_sewa', 'tb_transaksi', 'telat', 'tb_trx'));
        $tb_transaksi = Transaksi::with(['user', 'mobil'])->paginate(10);
        return view('laporan.index', compact('tb_transaksi', 'daftar_sewa'));
    }

    public function periode(Request $request)
    {

        $dari = $request->dari;
        $sampai = $request->sampai;

        $title = "Transaksi Pesanan dari $dari sampai $sampai";

        $data = Transaksi::whereDate('created_at', '>=', $dari)->whereDate('created_at', '<=', $sampai)->orderBy('created_at', 'desc')->get();

        return view('laporan.cetak', compact('title', 'data'));
    }

    public function print(Request $request)
    {
        // $dari = $request->dari;
        // $sampai = $request->sampai;

        // $title = "Transaksi Pesanan dari $dari sampai $sampai";

        // $data = Transaksi::whereDate('created_at', '>=', $dari)->whereDate('created_at', '<=', $sampai)->orderBy('created_at', 'desc')->get();

        // $pdf = PDF::loadView('laporan.index', $data);
        // return $pdf->download('index.pdf');
        $tb_transaksi = Transaksi::latest()->get();
        return view('laporan.cetak', compact('title', 'tb_transaksi'));
        // $pdf = PDF::loadview('laporan.index')->setPaper('A4', 'potrait');
        // return $pdf->stream();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
