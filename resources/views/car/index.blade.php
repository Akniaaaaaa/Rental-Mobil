@extends('layout_admin/main2')

@section('container')
<div class="container">
    <div class="card">
        <div class="card-header">
            <center>
                <h3 class="m-0 font-weight-bold text-primary">Data Mobil Permata Rental</h3>
               </center>        
            </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    
                <table id="example1" class="table table-bordered table-striped">
                    <div class="container-fluid">
                        {{-- <h2 class="text-center display-4">Search</h2> --}}
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action="/car/cari" method="GET">
                                    <div class="input-group">
                                        <input type="search" name="cari" value="{{ old('cari') }}" class="form-control form-control-lg" placeholder="Temukan mobil">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-lg btn-default" value="cari" href="/car/cari">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


            <a href="/car/create" class="btn btn-primary mb-2">Tambah Data Mobil</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            
            
            {{-- <table class="table"> --}}
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Merek</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Warna</th>
                        <th scope="col">gambar</th>
                        <th scope="col">NO Plat</th>
                        <th scope="col">Status</th>
                        <th scope="col">Harga sewa per hari </th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_pelajaran as $p) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $p->nama_pelajaran ?></td>
                            <td><a href="{{ route('pelajaran.nilai', $p->id_pelajaran) }}" class="btn btn-sm btn-primary" style="color: white; cursor: pointer;"><i class="fas fa-info"></i></a></td>
                            <td>
                                <a href="{{ route('pelajaran.edit', $p->id_pelajaran) }}" class="btn btn-sm btn-primary" style="color: white; cursor: pointer;"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('pelajaran.hapus', $p->id_pelajaran) }}" class="btn btn-sm btn-primary" style="color: white; cursor: pointer;"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
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