<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tipe;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tb_tipe = DB::table('tb_tipe')->get();
        return view('tipe.index', ['tb_tipe' => $tb_tipe]);
    }

    /**tipe
     * Show the form for creating a new resource.
     *tipe
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipe.tambah_data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipeRequest $request)
    {

        $data = $request->validated();
        Tipe::create($data);
        return redirect('/tipe')->with('status', 'Data Berhasil Ditambahkan');
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
    public function edit(Tipe $tipe)
    {
        return view('tipe.edit', compact('tipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipeRequest $request, $id)
    {
        $data = $request->validated();
        Tipe::where('id', $id)->update($data);
        return redirect('/tipe')->with('status', 'Data Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_tipe')->where('id', $id)->delete();
        return redirect('/tipe')->with('status', 'Data Berhasil Dihapus');
    }
}
