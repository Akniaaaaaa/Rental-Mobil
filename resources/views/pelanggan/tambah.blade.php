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
                    <h3 class="m-0 font-weight-bold text-primary">Form Tambah Data Penyewa Permata Rental</h3>
                </center>
            </div>
            <div class="row ml-5">
                <div class="col-10 ml-5">
                    
                    <div class=" mt-4 ml-5">
                        
                        <form method="post" action="/pelanggan" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <div class="form-group ml-2">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control @erorr('name') is-invalid 
                                        @enderorr" id="name" placeholder="Masukkan Nama Penyewa" name="name" value="{{  old('name') }}">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group ml-2">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email Penyewa" name="email" value="{{ old('email') }}">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group ml-2">
                                                <label for="no_ktp">No. KTP</label>
                                                <input type="text" class="form-control
                                                @error('no_ktp') is-invalid @enderror" id="no_ktp" placeholder="Masukan No. KTP" name="no_ktp" value="{{ old('no_ktp') }}">
                                                @error('no_ktp')
                                                <div class="invalid-feedback">
                                                    {{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group mr-2">
                                                    <label>Jenis Kelamin</label>
                                                    <select name="jk" class="form-control @error('jk') is-invalid @enderror">
                                                        <option value="" selected>--Pilih Jenis Kelamin--</option>
                                                        <option value="Laki-laki" {{ old('jk') }}>--Laki-laki--</option>
                                                        <option value="Perempuan" {{ old('jk') }}>--Perempuan--</option>
                                                    </select>
                                                    @error('jk')
                                                    <div class="invalid-feedback">
                                                        {{$message}}</div>
                                                        @enderror
                                                </div>
                                </div>
                                            <div class="col-md-6">
                                                <div class="form-group mr-2">
                                                    <label for="no_hp">No. HP</label>
                                                    <input type="text" class="form-control
                                                    @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Masukan No. HP Penyewa" name="no_hp" value="{{ old('no_hp') }}">
                                                    @error('no_hp')
                                                    <div class="invalid-feedback">
                                                        {{$message}}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mr-2">
                                                        <label for="alamat">Alamat</label>
                                                        <input type="text" class="form-control
                                                        @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat Penyewa" name="alamat" value="{{ old('alamat') }}">
                                                        @error('alamat')
                                                        <div class="invalid-feedback">
                                                            {{$message}}</div>
                                                            @enderror
                                                        </div>
                                                       
                                                            
                                                            
                                                           
                                                                <div class="form-group mr-2">
                                                                    <label for="gambar">Foto KTP</label>
                                                                    <input type="file" class="form-control
                                                                        @error('gambar') is-invalid @enderror" id="gambar" placeholder="Masukan gambar KTP" 
                                                                        name="gambar" value="{{ old('gambar') }}">
                                                                            @error('gambar')
                                                                            <div class="invalid-feedback">
                                                                                {{$message}}</div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-check">
                                                                                        <input 
                                                                                        class="form-check-input @error('role') is-invalid @enderror"
                                                                                        id="role"
                                                                                        type="checkbox" 
                                                                                        name="role" 
                                                                                        value="pelanggan" 
                                                                                        id="role" {{ old('role') ? 'checked' : '' }}>
                                                                                        
                                                                                        <label class="form-check-label" for="role">
                                                                                            {{ __('Pelanggan') }}
                                                                                        </label>
                                                                                        
                                                                                        @error('role')
                                                                                        <div class="invalid-feedback">
                                                                                            {{$message}}
                                                                                        </div>
                                                                                        @enderror
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-right mx-4 my-1 mb-4">
                                                                <button type="submit" class="btn btn-dark  mb-3" >Simpan</button>
                                                                <button type="reset" class="btn btn-danger mb-3">Reset</button>
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