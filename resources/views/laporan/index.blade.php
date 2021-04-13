@extends('layout_admin/main2')

@section('title','Car')
@section('title','Data Mobil')

@section('container')

<div class="container">
  <div class="container">
      <div class="card">
          <div class="card-header">
              <center>
                  <h3 class="m-0 font-weight-bold text-primary">Laporan Mobil Permata Rental</h3>
                 </center>        
              </div>
    
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <button type="button" class="btn btn-sm btn-flat btn-success btn-filter mb-3" data-toggle="modal" data-target="#modal-filter" target="_blank">filter Tanggal</button>
        {{-- <a href="#modal-filter" class="btn btn-sm btn-flat btn-success btn-filter mb-3"><i class="fa fa-filter"></i> Filter Tanggal</a> --}}
        <br>
        <thead>
          {{-- <div class="card-header py-3">
            <center><h3 class="m-0 font-weight-bold text-primary mb-3">Laporan Penyewaan Permata Rental</h3>
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
            </center>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered mt-3" id="dataTable" width="100%" cellspacing="0">
                <button type="button" class="btn btn-sm btn-flat btn-success btn-filter" data-toggle="modal" data-target="#modal-filter" target="_blank">filter Tanggal</button>
                {{-- <a href="#modal-filter" class="btn btn-sm btn-flat btn-success btn-filter"><i class="fa fa-filter"></i> Filter Tanggal</a> --}}
                {{-- <br>
                  <a href="/laporan/print" class="btn btn-warning my-3" target="_blank">
                    print</a>
                    <thead class="thead-dark"> --}} 
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Pelanggan</th>
                        <th scope="col">Mobil</th>
                        <th scope="col">Tanggal Rental</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Tanggal Pengembalian</th>
                        <th scope="col">Status Sewa</th>
                        <th scope="col">Status Pengembalian</th>
                        <th scope="col">Pembayaran</th>
                        
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
                            {{-- Rp. {{ number_format($transaksi->pembayaran($transaksi), 2) }} --}}
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
                      </tr>
                      @endforeach
                    </tbody>
              </table>
              <table align="right">
                    <tr>
                     <h4 <td><strong>Total Pemasukan</strong></td>
                      <td>
                      <?php
                      $harga_total = 0;
                      foreach($daftar_sewa as $transaksi)
                       {
                        // simpan nilai harga ke variabel $harga_total
                        // $harga_total +=$transaksi->pembayaran($transaksi);
                        $date1     = date_create($transaksi->tgl_rental);
                        $date2   = date_create($transaksi->tgl_kembali);
                        $cek_telat = date_diff($date1,$date2); 
                        $telat   = $cek_telat->format("%a");
                        if ($telat>0) {
                          $total=$telat*($transaksi->harga);
                          
                        }else {
                          
                          $total=1*($transaksi->harga);
                        }
                        $harga_total +=$total;
                      }
                  ?>
                          <h4 <strong> Rp. {{number_format($harga_total, 2)}}</strong>
                         </td>
                          </tr>
                        
                  </table>
                </div>
              </div>
            </div>
          </div>
          
          {{-- modal filter --}}
          <div class="modal fade" id="modal-filter" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
            <div class="modal-dialog modal-default modal-dialog-centered modal-" role="document">
              <div class="modal-content bg-gradient-danger">
                
                <div class="modal-header">
                  <h6 class="modal-title" id="modal-title-notification">Masukan tanggal laporan yang ingin dilihat!</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  
                  <form role="form" action="{{ url('laporan/periode') }}" method="get">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Dari Tanggal</label>
                        <input type="date" class="form-control datepicker" id="exampleInputEmail1" placeholder="Dari Tanggal" name="dari" autocomplete="off" value="{{ date('Y-m-d') }}">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputPassword1">dari tanggal</label>
                        <input type="date" class="form-control datepicker" name="sampai" id="exampleInputPassword1" placeholder="dari tanggal" autocomplete="off" value="{{ date('Y-m-d') }}">
                      </div>
                      
                    </div>
                    <!-- /.box-body -->
                    
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                  
                </div>
                
                
                
              </div>
            </div>
         
          
          
          
          @endsection
          
          {{-- <script type="text/javascript">
            $(document).ready(function(){
              
              
              $('.btn-filter').click(function(e){
                e.preventDefault();
                
                $('modal-filter').modal();
              })
              
            })
          </script> --}}