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
                <h3 class="m-0 font-weight-bold text-primary">Form Ubah Data Penyewa Permata Rental</h3>
            </center>
        </div>
        <div class="row ml-5">
            <div class="col-10 ml-5">
                
                <div class=" mt-4 ml-5">
                    
                    <form method="post" action="{{ route('pelanggan.update', $pelanggan->id) }}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                
                                <div class="form-group ml-2">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control @erorr('name') is-invalid 
                                    @enderorr" id="name" placeholder="Masukkan Nama Penyewa" name="name" value="{{ $pelanggan->name }}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email Penyewa" name="email" value="{{ $pelanggan->email }}">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group ml-2">
                                            <label for="no_ktp">No. KTP</label>
                                            <input type="text" class="form-control
                                            @error('no_ktp') is-invalid @enderror" id="no_ktp" placeholder="Masukan No. KTP" name="no_ktp" value="{{ $pelanggan->no_ktp }}">
                                            @error('no_ktp')
                                            <div class="invalid-feedback">
                                                {{$message}}</div>
                                                @enderror
                                            </div>
                                            
                                            <div class="form-group mr-2">
                                                <label for="gambar">Foto KTP</label>
                                                <input type="file" class="form-control
                                                @error('gambar') is-invalid @enderror" id="No Plat" placeholder="Masukan gambar" 
                                                name="gambar" value="{{ $pelanggan->gambar }}">
                                                @error('gambar')
                                                <div class="invalid-feedback">
                                                    {{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group mr-2">
                                                    <label for="no_hp">No. HP</label>
                                                    <input type="text" class="form-control
                                                    @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Masukan No. HP Penyewa" name="no_hp" value="{{ $pelanggan->no_hp }}">
                                                    @error('no_hp')
                                                    <div class="invalid-feedback">
                                                        {{$message}}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mr-2">
                                                        <label for="alamat">Alamat</label>
                                                        <input type="text" class="form-control
                                                        @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat Penyewa" name="alamat" value="{{ $pelanggan->alamat }}">
                                                        @error('alamat')
                                                        <div class="invalid-feedback">
                                                            {{$message}}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jk">Jenis Kelamin</label>
                                                            <select class="form-control @error('jk') is-invalid @enderror" id="inputGroupSelect01" name="jk" required autocomplete="jk" autofocus>
                                                                <option value="{{ $pelanggan->jk }}" selected>{{ $pelanggan->jk }}</option>
                                                                <option value="Laki-laki">Laki-laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                            @error('jk')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
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
                                                            <button type="submit" class="btn btn-dark mt-4 mb-3">Simpan</button>
                                                            {{-- <button type="reset" class="btn btn-danger mt-4 mt-3">Reset</button> --}}
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