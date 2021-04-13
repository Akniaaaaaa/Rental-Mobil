@extends('layout_admin/main2')

@section('title','Car')

@section('container')
<div class="container">
    <div class="card shadow mb-4 ml-90 mt4">
        <div class="card-header py-3">
           <center>
            <h3 class="m-0 font-weight-bold text-primary">Form Ubah Data Mobil Permata Rental</h3>
           </center>
        </div>
        <div class="row ml-5">
            <div class="col-10 ml-5">
                
                <div class=" mt-4 ml-5">
                    <form method="post" action="{{ route('car.update', $mobil->id) }}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                {{-- <div class="form-group ml-2">
                                    <label>Tipe Mobil</label>
                                    <select name="kd_tipe" class="form-control @error('kd_tipe') is-invalid
                                        @enderror" value="{{ $mobil ?? 'kd_tipe' }}">
                                                <option value="">--Pilih Tipe Mobil--</option>
                                                @foreach ( $tb_tipe as $yy )
                                                <option value="{{ $yy->nm_tipe }}">{{ $yy->nm_tipe }}</option>                                            
                                                @endforeach 
                                    </select>
                                    @error('kd_tipe')
                                    <div class="invalid-feedback">
                                        {{$message}}</div>
                                    @enderror

                                </div> --}}
                                <div class="form-group ml-2">
                                    <label for="kd_tipe">Tipe</label>
                                    <input type="text" class="form-control @error('kd_tipe') is-invalid 
                            @enderror" id="kd_tipe" placeholder="Masukkan Tipe" name="kd_tipe" value="{{  $mobil->kd_tipe }}">
                                    @error('kd_tipe')
                                    <div class="invalid-feedback">
                                        {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group ml-2">
                                    <label for="Merek">Merek</label>
                                    <input type="text" class="form-control @erorr('merek') is-invalid 
                            @enderorr" id="merek" placeholder="Masukkan Merek" name="merek" value="{{ $mobil->merek }}">
                                    @error('merek')
                                    <div class="invalid-feedback">
                                        {{$message}}</div>
                                    @enderror
                                </div>
                                <!-- <div class="form-group">
                            <label for="Tipe">Tipe</label>
                            <input type="text" class="form-control" id="tipe" placeholder="Masukan tipe" name="kd_tipe">
                        </div> -->


                                {{-- <div class="form-group">
                                    <label for="Tahun">Tahun</label>
                                    <input type="date" class="form-control
                            @error('tahun') is-invalid @enderror" id="tahun" placeholder="Masukan tahun" name="tahun" value="{{ $mobil->tahun }}">
                                    @error('tahun')
                                    <div class="invalid-feedback">
                                        {{$message}}</div>
                                    @enderror
                                </div> --}}

                                <div class="form-group ml-2">
                                    <label for="Tahun">Tahun</label>
                                    {{-- <input type="date" class="form-control
                                    @error('tahun') is-invalid @enderror" id="tahun" placeholder="Masukan tahun" name="tahun" value="{{ old('tahun') }}"> --}}
                                    
                                    <select name="tahun" class="form-control">
                                        <<option value="{{ $mobil->tahun }}" selected>{{ $mobil->tahun }}</option>
                                        @foreach ($year as $y)
                                        <option value="{{ $y }}">{{ $y }}</option>                                            
                                        @endforeach
                                    </select>
                                
                                @error('tahun')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                                
                                <div class="form-group ml-2">
                                    <label for="Warna">Warna</label>
                                    <input type="text" class="form-control @error('warna') is-invalid @enderror" id="warna" placeholder="Masukan warna" name="warna" value="{{ $mobil->warna }}">
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
                            @error('no_plat') is-invalid @enderror" id="No Plat" placeholder="Masukan No.Plat" name="no_plat" 
                            value="{{ $mobil->no_plat }}">
                                    @error('no_plat')
                                    <div class="invalid-feedback">
                                        {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mr-2">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <<option value="{{ $mobil->status }}" selected>{{ $mobil->status }}</option>
                                        <option value="Tersedia" {{ $mobil ?? 'status' }}>--Tersedia--</option>
                                        <option value="Tidak Tersedia" {{ $mobil ?? 'status' }}>--Tidak Tersedia--</option>
                                    </select>
                                </div>
                                <div class="form-group mr-2">
                                    <label for="gambar">Foto Mobil</label>
                                    <input type="file" class="form-control
                            @error('gambar') is-invalid @enderror" id="gambar" placeholder="Masukan gambar" 
                            name="gambar" value="{{ $mobil->gambar }}">
                                    @error('gambar')
                                    <div class="invalid-feedback">
                                        {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mr-2">
                                    <label for="harga">Harga Sewa per Hari</label>
                                    <input type="text" class="form-control
                                    @error('harga') is-invalid @enderror" id="harga" placeholder="Masukan Harga Sewa" name="harga" value="{{ $mobil->harga }}">
                                    @error('harga')
                                    <div class="invalid-feedback">
                                        {{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="text-right mx-4 my-1 mb-4">
                                <button type="submit" class="btn btn-dark mt-4 mb-2">Simpan</button>
                                {{-- <button type="reset" class="btn btn-danger mt-4">Reset</button> --}}
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