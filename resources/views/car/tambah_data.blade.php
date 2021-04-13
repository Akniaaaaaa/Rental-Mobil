@extends('layout_admin/main2')
@section('container')

<div class="container">
    <div class="card shadow mb-4 ml-90 mt4">
        <div class="card-header py-3">
           <center>
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif --}}
            <h3 class="m-0 font-weight-bold text-primary">Form Tambah Data Mobil Permata Rental</h3>
           </center>
        </div>
        <div class="row ml-5">
            <div class="col-10 ml-5">
                
                <div class=" mt-4 ml-5">
              
                    <form method="post" action="/car" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ml-2">
                                    <label for="kd_tipe">Tipe</label>
                                    <input type="text" class="form-control @error('kd_tipe') is-invalid 
                            @enderror" id="kd_tipe" placeholder="Masukkan Tipe" name="kd_tipe" value="{{  old('tipe') }}">
                                    @error('kd_tipe')
                                    <div class="invalid-feedback">
                                        {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group ml-2">
                                    <label for="Merek">Merek</label>
                                    <input type="text" class="form-control @error('merek') is-invalid 
                            @enderror" id="merek" placeholder="Masukkan Merek" name="merek" value="{{  old('merek') }}">
                                    @error('merek')
                                    <div class="invalid-feedback">
                                        {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group ml-2">
                                    <label>Tahun</label>
                                    <select name="tahun" class="form-control @error('tahun') is-invalid
                                        @enderror" value="{{  old('tahun') }}">
                                        <option value="">--Pilih Tahun--</option>
                                        @foreach ( $year as $yy )
                                        <option value="{{ $yy }}">{{ $yy }}</option>                                            
                                        @endforeach 
                                    </select> 
                                    @error('tahun')
                                    <div class="invalid-feedback">
                                        {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group ml-2">
                                    <label for="Warna">Warna</label>
                                    <input type="text" class="form-control @error('warna') is-invalid @enderror" id="warna" placeholder="Masukan warna" name="warna" value="{{ old('warna') }}">
                                    @error('warna')
                                    <div class="invalid-feedback">
                                        {{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mr-2">
                                        <label for="No Plat">No. Plat</label>
                                        <input type="text" class="form-control
                                        @error('no_plat') is-invalid @enderror" id="No Plat" placeholder="Masukan No.Plat" name="no_plat" value="{{ old('no_plat') }}">
                                        @error('no_plat')
                                        <div class="invalid-feedback">
                                            {{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mr-2">
                                            <label>Status</label>
                                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                                <option value="" selected>--Pilih Status Mobil--</option>
                                                <option value="Tersedia" {{ old('status') }}>--Tersedia--</option>
                                                <option value="Tidak Tersedia" {{ old('status') }}>--Tidak Tersedia--</option>
                                            </select>
                                            @error('status')
                                            <div class="invalid-feedback">
                                                {{$message}}</div>
                                                @enderror
                                        </div>
                                        <div class="form-group mr-2">
                                                    <label for="gambar">Foto Mobil</label>
                                                    <input type="file" class="form-control
                                                        @error('gambar') is-invalid @enderror" id="gambar" placeholder="Masukan gambar" 
                                                        name="gambar" value="{{ old('gambar') }}">
                                                            @error('gambar')
                                                            <div class="invalid-feedback">
                                                                {{$message}}</div>
                                                                @enderror
                                                            </div>
                                                                      <div class="form-group mr-2">
                                                                            <label for="harga">Harga Sewa per Hari</label>
                                                                            <input type="text" class="form-control
                                                                            @error('harga') is-invalid @enderror" id="harga" 
                                                                            placeholder="Masukan Harga Sewa" name="harga" value="{{ old('harga') }}">
                                                                            @error('harga')
                                                                            <div class="invalid-feedback">
                                                                                {{$message}}</div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="text-right mx-4 my-1 mb-4">
                                            <button type="submit" class="btn btn-dark mt-4 mb-3">Simpan</button>
                                            <button type="reset" class="btn btn-danger mt-4 mb-3">Reset</button>
                                                                            </div>
                                        </div>
                                    </div>
                                </form>
                            
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            
            <!-- /.content -->
        </div>   
                    @endsection