@extends('layout_admin/main2')

@section('title','Car')

@section('container')
<div class="container">
    <div class="card shadow mb-4 ml-90 mt4">
        <div class="card-header py-3">
           <center>
            <h6 class="m-0 font-weight-bold text-primary">Ubah Data Tipe Mobil Permata Rental</h6>
           </center>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form method="post" action="{{ route('tipe.update', $tipe->id) }}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                            
                                <div class="form-group">
                                    <label for="kd_tipe">Kode Tipe</label>
                                    <input type="text" class="form-control @erorr('kd_tipe') is-invalid 
                            @enderorr" id="kd_tipe" placeholder="Masukkan Tipe" name="kd_tipe" value="{{ $tipe->kd_tipe }}">
                                    @error('merek')
                                    <div class="invalid-feedback">
                                        {{$message}}</div>
                                    @enderror
                                </div>
                            
                               
                                
                                <div class="form-group">
                                    <label for="nm_tipe">Nama Tipe</label>
                                    <input type="text" class="form-control @error('nm_tipe') is-invalid @enderror" id="nm_tipe" 
                                    placeholder="Masukan warna" name="nm_tipe" value="{{ $tipe->nm_tipe }}">
                                    @error('nm_tipe')
                                    <div class="invalid-feedback">
                                        {{$message}}</div>
                                    @enderror
                                </div>
                         
                                <button type="submit" class="btn btn-dark mt-4">Simpan</button>
                                <button type="reset" class="btn btn-danger mt-4">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>

        @endsection