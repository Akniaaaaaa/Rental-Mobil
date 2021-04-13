<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Mobil;


class CarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tb_mobil = DB::table('tb_mobil')->get();
        // $tipe = DB::table('tb_tipe')->get('nm_tipe');
        return view('car.index', ['tb_mobil' => $tb_mobil]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $year = range(1990, date('Y'));
        $tb_mobil = DB::table('tb_mobil')->get();
        return view('car.tambah_data', compact('tb_mobil', 'tb_tipe', 'year'));
        // return view('car.tambah_data', ['tb_mobil' => $tb_mobil], ['tb_tipe' => $tb_tipe], compact('year'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request)
    {
        $data = $request->validated();
        $data['gambar'] = $data['gambar']->store('car');
        Mobil::create($data);
        return redirect('/car')->with('status', 'Data Berhasil Ditambahkan');
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
    public function edit(Mobil $mobil)
    {

        $year = range(1990, date('Y'));
        return view('car.edit', compact('mobil', 'year', 'tb_tipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarRequest $request, $id)
    {
        $data = $request->validated();

        $data['gambar'] = $data['gambar']->store('car');

        Mobil::where('id', $id)->update($data);

        return redirect('/car')->with('status', 'Data Mobil Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        DB::table('tb_mobil')->where('id', $id)->delete();
        return redirect('/car')->with('status', 'Data Berhasil Dihapus');
        // return redirect('/car');

    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $tb_mobil = DB::table('tb_mobil')
            ->where('merek', 'like', "%" . $cari . "%")
            ->orwhere('no_plat', 'like', "%" . $cari . "%")
            ->orwhere('tahun', 'like', "%" . $cari . "%")
            ->orwhere('kd_tipe', 'like', "%" . $cari . "%")
            ->orwhere('warna', 'like', "%" . $cari . "%")
            ->orwhere('status', 'like', "%" . $cari . "%")
            ->orwhere('harga', 'like', "%" . $cari . "%")
            ->paginate();

        return view('car.index', ['tb_mobil' => $tb_mobil]);
    }
}
