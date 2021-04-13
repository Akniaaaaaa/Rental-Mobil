<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PelangganRequest;
use App\Http\Controllers\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')->where('role', '=', 'pelanggan')->get();
        return view('pelanggan.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pelanggan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PelangganRequest $request)
    {
        // dd($request->validated());
        $data = $request->validated();
        $data['gambar'] = $data['gambar']->store('pelanggan');
        User::create($data);
        return redirect('/pelanggan')->with('status', 'Data Berhasil Ditambahkan');
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
    public function edit(User $pelanggan)
    {
        $user = \App\User::all();
        return view('pelanggan.edit', compact('pelanggan', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PelangganRequest $request, $id)
    {
        // dd('testin');
        $data = $request->validated();
        // dd($data);
        $data['gambar'] = $data['gambar']->store('pelanggan');
        User::where('id', $id)->update($data);
        return redirect('/pelanggan')->with('status', 'Data Penyewa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/pelanggan')->with('status', 'Data Berhasil Dihapus');
    }
    public function foto($id)
    {
        $pelanggan = User::where('id', $id)->first();
        return view('pelanggan.foto', compact('pelanggan'));
    }
    public function cari(Request $request)
    {

        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $user = DB::table('users')
            ->where('name', 'like', "%" . $cari . "%")
            ->orwhere('alamat', 'like', "%" . $cari . "%")
            ->orwhere('jk', 'like', "%" . $cari . "%")
            ->orwhere('no_ktp', 'like', "%" . $cari . "%")
            ->orwhere('no_hp', 'like', "%" . $cari . "%")
            ->orwhere('email', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('pelanggan.index', compact('user'));
    }
}
