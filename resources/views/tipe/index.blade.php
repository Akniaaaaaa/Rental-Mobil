@extends('layout_admin/main2')

@section('title','Car')
@section('title','Data Mobil')

@section('container')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Tipe</th>
                <th scope="col">Nama TIpe</th>
                
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $tb_tipe as $tipe )
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $tipe->kd_tipe }}</td>
                <td>{{ $tipe->nm_tipe }}</td>

                <td>

                    <a href="/tipe/{{$tipe->id}}/edit" class="btn btn-primary fas fa-edit"></a>
                         @method('delete')
                        @csrf
                    <a href="/tipe/{{$tipe->id}}/destroy" class="btn btn-danger fas fa-trash-alt "
                         onclick="return confirm('Apakah Ingin Menghapus Data Soal ini ?')"></a>

                    
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

{{-- <div class="container">
    <div class="card shadow mb-4 ml-90 mt4">
        <div class="card-header py-3">
           <center>
            <h6 class="m-0 font-weight-bold text-primary">Data Mobil Permata Rental</h6>
           </center>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

            <a href="/tipe/create" class="btn btn-primary mb-2">Tambah Data Tipe</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Tipe</th>
                        <th scope="col">Nama TIpe</th>
                        
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $tb_tipe as $tipe )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $tipe->kd_tipe }}</td>
                        <td>{{ $tipe->nm_tipe }}</td>
    
                        <td>

                            <a href="/tipe/{{$tipe->id}}/edit" class="btn btn-primary fas fa-edit"></a>
                                 @method('delete')
                                @csrf
                            <a href="/tipe/{{$tipe->id}}/destroy" class="btn btn-danger fas fa-trash-alt "
                                 onclick="return confirm('Apakah Ingin Menghapus Data Mobil ini ?')"></a>

                            
                            @csrf
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div> --}}

@endsection