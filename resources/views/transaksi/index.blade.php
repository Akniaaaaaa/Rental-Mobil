@extends('layout_admin/main2')

@section('title','Car')
@section('title','Data Mobil')

@section('container')

<div class="container">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    <h3 class="m-0 font-weight-bold text-primary">Data Transaksi Mobil Permata Rental</h3>
                   </center>        
                </div>
            <!-- /.card-header -->
            <div class="card-body">
               
                    <div class="table-responsive">
                        
                        <table id="example1" class="table table-bordered table-striped">
                            <div class="container-fluid">
                                {{-- <h2 class="text-center display-4">Search</h2> --}}
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <form action="/transaksi/cari" method="GET">
                                            <div class="input-group">
                                                <input type="search" name="cari" value="{{ old('cari') }}" class="form-control form-control-lg" placeholder="Temukan transaksi">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-lg btn-default" value="cari" href="/transaksi/cari">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <a href="/transaksi/create" class="btn btn-primary mb-2">Tambah Data </a>
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif


                            {{-- <a href="/transaksi/export_excel" class="btn btn-success my-3" target="_blank">
                                EXPORT EXCEL</a> --}}
                                <br>
                                {{-- <a href="/transaksi/print" class="btn btn-warning my-3" target="_blank">
                                    print</a> --}}
                                    {{-- <thead class="thead-dark"> --}}
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Pelanggan</th>
                                            <th scope="col">Mobil</th>
                                            <th scope="col">Tanggal Rental</th>
                                            <th scope="col">Tanggal Kembali</th>
                                            <th scope="col">Tanggal Pengembalian</th>
                                            <th scope="col">Status Rental</th>
                                            <th scope="col">Status Pengembalian</th>
                                            <th scope="col">Pembayaran</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>                    
                                        
                                        @foreach( $daftar_sewa as $transaksi )
                                        
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            
                                            <td>{{ $transaksi->name }}</td>                                                                                            
                                            <td>{{ $transaksi->no_plat }}</td>
                                            <td>{{ $transaksi->tgl_rental }}</td>
                                            <td>{{ $transaksi->tgl_kembali }}</td>
                                            <td>{{ $transaksi->tgl_pengembalian }}</td>
                                            <td>{{ $transaksi->status_sewa }}</td>
                                            <td>{{ $transaksi->status_kembali }}</td>
                                            <td>
                                                @php
                                               $date1     = date_create($transaksi->tgl_rental);
                                               $date2   = date_create($transaksi->tgl_kembali);
                                               $cek_telat = date_diff($date1,$date2); 
                                               $telat   = $cek_telat->format("%a");
                                               if ($telat>0) {
                                                 $total=$telat*($transaksi->harga);
                                                 
                                                }else {
                                                  
                                                  $total=1*($transaksi->harga);
                                               }
                                               @endphp
                                               Rp. {{(number_format($total, 2))}}
                                              </td>    
                                           
                                            <td>
                                                <a href="/transaksi/{{$transaksi->id}}/edit" class="btn btn-primary fas fa-edit"></a>
                                                
                                                <a href="/transaksi/{{$transaksi->id}}/destroy" class="btn btn-danger fas fa-trash-alt "
                                                    onclick="return confirm('Apakah Ingin Menghapus Data Transaksi Mobil ini ?')">
                                                    @method('delete')
                                                    @csrf
                                                </a>                            
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $tb_transaksi->links() }}

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