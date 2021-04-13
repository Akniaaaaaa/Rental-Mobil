@extends('layout_admin/main2')

@section('title','Car')
@section('title','Data Mobil')

@section('container')

<div class="container">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    <h3 class="m-0 font-weight-bold text-primary">Data Penyewa Mobil Permata Rental</h3>
                   </center>        
                </div>
                
            <!-- /.card-header -->
            <div class="card-body">
          
                    <div class="table-responsive">
                        
                    <table id="example1" class="table table-bordered table-striped">
                        <div class="container-fluid">
                            {{-- <h2 class="text-center display-4">Search</h2> --}}
                            <div class="row">
                                <div class="col-md-8 offset-md-2 mb-2">
                                    <form action="/pelanggan/cari" method="GET">
                                        <div class="input-group">
                                            <input type="search" name="cari" value="{{ old('cari') }}" class="form-control form-control-lg" 
                                            placeholder="Temukan penyewa">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-lg btn-default" value="cari" href="/pelanggan/cari">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a href="/pelanggan/create" class="btn btn-primary mb-2">Tambah Data Penyewa</a>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
          
           
                <thead class="thead">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        {{-- <th scope="col">Password</th> --}}
                        {{-- <th scope="col">Tanggal Lahir</th> --}}
                        <th scope="col">alamat</th>
                        <th scope="col">No. Telepon</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Foto KTP</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $user as $pelanggan )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $pelanggan->name }}</td>
                        <td>{{ $pelanggan->email }}</td>
                        {{-- <td>{{ $pelanggan->password }}</td> --}}
                        {{-- <td>{{ $pelanggan->ttl }}</td> --}}
                        <td>{{ $pelanggan->alamat }}</td>
                        <td>0{{ $pelanggan->no_hp }}</td>
                        <td>{{ $pelanggan->no_ktp }}</td>
                        <td>{{ $pelanggan->jk }}</td>
                        <td>
                            <a href="/pelanggan/{{$pelanggan->id}}/foto" class="btn btn-light " target="_blank">
                             
                            {{-- <button type="button" class="btn btn-sm btn-flat btn-light btn-filter mb-3" data-toggle="modal" data-target="#modal-filter" target="_blank"> --}}
                            <img src="{{ asset('storage/' . $pelanggan->gambar) }}"  style="width: 100px; height: 100px;">   </a>
                            {{-- modal filter --}}
                            <div class="modal fade" id="modal-filter" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                                <div class="modal-dialog modal-default modal-dialog-centered modal-" role="document">
                                <div class="modal-body">
                                        <img src="{{ asset('storage/' . $pelanggan->gambar) }}"  style="width: 500px; height: 500px;">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </td>
                        <td>

                            <a href="/pelanggan/{{$pelanggan->id}}/edit" class="btn btn-primary fas fa-edit"></a>
                                 @method('delete')
                                @csrf
                            <a href="/pelanggan/{{$pelanggan->id}}/destroy" class="btn btn-danger fas fa-trash-alt " onclick="return confirm('Apakah Ingin Menghapus Data Mobil ini ?')"></a>

                            
                            @csrf
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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