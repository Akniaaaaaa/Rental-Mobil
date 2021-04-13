@extends('layout_admin/main2')

@section('title','Car')

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
            <h4 class="m-0 font-weight-bold text-primary">Tambah Data Transaksi Mobil Permata Rental</h4>
           </center>
        </div>
        <div class="row ml-5">
          <div class="col-10 ml-5">

              <div class=" mt-4 ml-5">
                    <form method="post" action="/transaksi" 
                        enctype="multipart/form-data">
                        {{-- @method('patch') --}}
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                            
                              <div class="form-group ml-2">
                                <label>Nama Penyewa</label>
                                <select name="id_plg" class="form-control @error('id_plg') is-invalid
                                    @enderror">
                                
                                    <option value="">--Penyewa--</option>
                                    @foreach ( $users as $yy )
                                      <option value="{{ $yy->id }}">{{ $yy->name }}</option>                                            
                                    @endforeach 
                                </select> 
                                @error('id_plg')
                                <div class="invalid-feedback">
                                    {{$message}}</div>
                                @enderror
                            </div>
                              <div class="form-group ml-2">
                                <label>Mobil</label>
                                <select name="id_mobil" class="form-control @error('id_mobil') is-invalid
                                    @enderror">
                                
                                    <option value="{{ old('no_plat') }}">--Mobil--{{ old('no_plat') }}</option>
                                    @foreach ( $tb_mobil as $yy )
                                      <option value="{{ $yy->id }}">{{ $yy->no_plat }}</option>                                            
                                    @endforeach 
                                </select> 
                                @error('id_mobil')
                                <div class="invalid-feedback">
                                    {{$message}}</div>
                                @enderror
                              </div>
                              <div class="form-group mt-3 ml-2">
                                <label for="tgl_rental">Tanggal Sewa</label>
                                <input type="date" class="form-control @error('tgl_rental') is-invalid @enderror" id="tgl_rental" 
                                placeholder="Masukan tanggal sewa" name="tgl_rental" value="{{ old('tgl_rental') }}">
                                @error('tgl_rental')
                                <div class="invalid-feedback">
                                  {{$message}}</div>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                              
                              <div class="form-group ml-2">
                                <label for="tgl_kembali">Tanggal Kembali </label>
                                <input type="date" class="form-control @error('tgl_kembali') is-invalid @enderror" id="tgl_kembali" 
                                placeholder="Masukan tanggal kembali" name="tgl_kembali" value="{{ old('tgl_kembali') }}">
                                @error('tgl_kembali')
                                <div class="invalid-feedback">
                                  {{$message}}</div>
                                  @enderror
                                </div>
                            {{-- </div> --}}
                       
                        {{-- <div class="col-md-6">
                              <div class="form-group">
                                <label for="tgl_pengembalian">Tanggal Pengembalian</label>
                                <input type="date" class="form-control @error('tgl_pengembalian') is-invalid @enderror" id="tgl_pengembalian" 
                                placeholder="Masukan tanggal pengembalian" name="tgl_pengembalian" value="{{ old('tgl_pengembalian') }}">
                                @error('tgl_pengembalian')
                                <div class="invalid-feedback">
                                  {{$message}}</div>
                                  @enderror
                                </div> --}}
                                      <div class="form-group">
                                        <label for="status_sewa">Status Sewa</label>
                                        <input type="text" class="form-control @error('status_sewa') is-invalid @enderror" id="status_sewa" 
                                        placeholder="Masukan status sewa..." name="status_sewa" value="{{ old('status_sewa') }}">
                                        @error('status_sewa')
                                        <div class="invalid-feedback">
                                            {{$message}}</div>
                                        @enderror
                                    </div>
                                     
                                      {{-- <div class="form-group">
                                        <label for="status_kembali">Status Pengembalian</label>
                                        <input type="text" class="form-control @error('status_kembali') is-invalid @enderror" id="status_kembali" 
                                        placeholder="Masukan alamat penyewa..." name="status_kembali" value="{{ old('status_kembali') }}">
                                        @error('status_kembali')
                                        <div class="invalid-feedback">
                                            {{$message}}</div>
                                        @enderror
                                    </div> --}}
                                                    
                                      <div class="form-group">
                                        <label>Pilih Pengambilan</label>
                                        <select name="pengambilan" class="form-control @error('pengambilan') is-invalid
                                        @enderror" value="{{ old('pengambilan') }}">
                                        <option value="">--Pilih Pengambilan Mobil--</option>
                                        <option value="ambil ke toko">--Ambil ke toko--</option>
                                        <option value="antar alamat">--Antar alamat--</option>                          
                                      </select>
                                      @error('pengambilan')
                                      <div class="invalid-feedback">
                                        {{$message}}</div>
                                        @enderror
                                        <div class="text-right mx-4 my-1 mb-4">
                                <button type="submit" class="btn btn-dark mt-4">Simpan</button>
                                <button type="reset" class="btn btn-danger mt-4">Reset</button>
                                        </div>
                              </div>
                        </div>
                    </form>
                </table>
            </div>
        </div>
      </div>
  
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
</div>


        @endsection