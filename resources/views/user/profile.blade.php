<!-- <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
<!-- profil -->
<!-- <div class="col-sm-10 mb-3 mb-sm-0">
    <div class="col-sm-6">
        <class="form-control" type="text" placeholder="Readonly input here..." readonly>
            </div> -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Profile</title>

    <link href="{{url('bizpage/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('bizpage/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('bizpage/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('bizpage/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('bizpage/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bizpage/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bizpage/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bizpage/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bizpage/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('bizpage/css/style.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets_user/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/assets_user/css/style.css">


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-success">My Profile</h3>
        </div>
        <div class="form-group row">
            <div class="col-sm-5 mb-5 mb-sm-0">
                <div class="card-body">
                    <div class="card shadow mt-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Data Diri</h6>
                        </div>
                        {{-- <span class="online-status status-available">Available</span> --}}
                     
                        <div class="form-group row center">
                            <div class="col-sm-4 mb-6 ml-3">

                                {{-- <h4 class="heading">Basic Info</h4> --}}
                                <ul class=" nav- menu list-unstyled list-justify mt-5 ml-3" style="text-transform: uppercase;">

                                    <strong>Nama Lengkap </strong> <br> <br>
                                    <strong>Alamat </strong> <br> <br>
                                    <strong>Telepon </strong> <br> <br>
                                    <strong>No. KTP </strong> <br> <br>
                                    <strong>Jenis Kelamin </strong>

                                </ul>
                            </div>
                            <div class="col-sm-6 mb-6">

                                {{-- <h4 class="heading">Basic Info</h4> --}}
                                <ul class="list-unstyled list-justify mt-5" style="text-transform: uppercase;">

                                    :</strong> {{$pelanggan->name}} <br> <br>
                                    :</strong> {{$pelanggan->alamat}} <br> <br>
                                    <strong>:</strong> {{$pelanggan->no_hp}} <br> <br>
                                    <strong>:</strong> {{$pelanggan->no_ktp}} <br> <br>
                                    <strong>:</strong> {{$pelanggan->jk}}

                                </ul>
                            </div>
                        </div>
                        <div class="text-left mx-4 my-1 mb-4">
                            <a href="/user/ {{$pelanggan->id}}/edit" class="btn btn-warning"> Edit Profile</a>
                            <a href="/" class="btn btn-primary"> Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="card-body">
                <!-- <div class="card" style="width: 43rem;"> -->
                <!-- <img src="/img/tegar.jpg" class="card-img-top" alt="..."> -->
                <!-- <input type="file" class="form-control-file" id="exampleFormControlFile1"> -->
                <!-- <div class="form-group"> -->
                <!-- <div class="card-body"> -->
                <!-- <form> -->
                <!-- <div class="form-group row"> -->
                <!-- <div class="col-sm-5 mb-3 mb-sm-0"> -->
                <!-- <button type="button" class="btn btn-primary btn-sm">Simpan</button> -->
                <!-- </div> -->
                <!-- </div> -->
                <!-- </form> -->
                <div class="text-">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Daftar Penyewaan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Merek Mobil</th>
                                            <th>Tanggal Sewa</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Pengambilan</th>
                                            <th>Harga Sewa</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($daftar_sewa as $item)
                                        <tr>
                                            <td>{{$item->merek}}</td>
                                            <td>{{$item->tgl_rental}}</td>
                                            <td>{{$item->tgl_kembali}}</td>
                                            <td>{{$item->pengambilan}}</td>
                                            <td>
                                                @php
                                               $date1     = date_create($item->tgl_rental);
                                               $date2   = date_create($item->tgl_kembali);
                                               $cek_telat = date_diff($date1,$date2); 
                                               $telat   = $cek_telat->format("%a");
                                               if ($telat>0) {
                                                 $total=$telat*($item->harga);
                                                 
                                                }else {
                                                  
                                                  $total=1*($item->harga);
                                               }
                                               @endphp
                                               Rp. {{(number_format($total, 2))}}
                                              </td> 
                                            <td>

                                                <a href="/user/{{$item->id}}/print" class="btn btn-success " target="_blank">
                                                    print</a>
                                                <a href="/user/{{$item->id}}/destroy" class="btn btn-danger my-3" onclick="return confirm('Apakah Anda Ingin Membatalkan Sewa Mobil ini ?')">
                                                    @method('delete')
                                                    Batal Sewa
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="text-right mx-3 my-1">
                        {{-- <a href="/user/ {{$pelanggan->id}}/edit" class="btn btn-warning"> Edit Profile</a> --}}
                       
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="/assets_user/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="/assets_user/js/demo/chart-area-demo.js"></script>
        <script src="/assets_user/js/demo/chart-pie-demo.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="/assets_user/js/demo/datatables-demo.js"></script>
    </div>
    </body>

</html>