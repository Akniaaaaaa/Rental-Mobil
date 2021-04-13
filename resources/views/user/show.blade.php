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

   <title>Detail</title>

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


   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h3 class="m-0 font-weight-bold text-success">Detail Mobil</h3>
      </div>
      <div class="form-group row">
         <div class="col-sm-5 mb-3 mb-sm-0">
            <div class="card-body">
               <div class="card" style="width: 35rem;">
                  <img src="{{asset('storage/' . $tb_mobil->gambar) }}" class="card-img mx-5 my-5" alt="..." style="width: 400px; height: 300px;">
                  <!-- <input type="file" class="form-control-file" id="exampleFormControlFile1"> -->
                  <!-- <div class="form-group"> -->

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
               <ul class="list-group">
                  <div class="text-center">
                     <li class="list-group-item list-group-item-success">Data Mobil</li>
                  </div>
                  <li class="list-group-item">{{ $tb_mobil->merek }}</li>
                  <li class="list-group-item">Rp. {{ number_format($tb_mobil->harga, 2) }} per hari</li>
                  <li class="list-group-item">{{ $tb_mobil->warna }}</li>
                  <li class="list-group-item">{{ $tb_mobil->tahun }}</li>
                  <li class="list-group-item">{{ $tb_mobil->no_plat }}</li>
                  <li class="list-group-item">{{ $tb_mobil->kd_tipe}}</li>
                  <li class="list-group-item">{{ $tb_mobil->status }}</li>
               </ul>
            </div>
            <div>
               <div class="text-right mt-3">
                  <a href="/user/{{$tb_mobil->id}}/create" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Sewa</a>
                  <a href="/" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Kembali</a>
               </div>
            </div>
            <!-- </div> -->
            <!-- </div> -->
         </div>
      </div>
      <!-- JavaScript Libraries -->
      <script src="{{ asset('bizpage/lib/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('bizpage/lib/jquery/jquery-migrate.min.js') }}"></script>
      <script src="{{ asset('bizpage/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('bizpage/lib/easing/easing.min.js') }}"></script>
      <script src="{{ asset('bizpage/lib/superfish/hoverIntent.js') }}"></script>
      <script src="{{ asset('bizpage/lib/superfish/superfish.min.js') }}"></script>
      <script src="{{ asset('bizpage/lib/wow/wow.min.js') }}"></script>
      <script src="{{ asset('bizpage/lib/waypoints/waypoints.min.js') }}"></script>
      <script src="{{ asset('bizpage/lib/counterup/counterup.min.js') }}"></script>
      <script src="{{ asset('bizpage/lib/owlcarousel/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('bizpage/lib/isotope/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('bizpage/lib/lightbox/js/lightbox.min.js') }}"></script>
      <script src="{{ asset('bizpage/lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
      <!-- Contact Form JavaScript File -->
      <script src="{{ asset('bizpage/contactform/contactform.js') }}"></script>

      <!-- Template Main Javascript File -->
      <script src="{{ asset('bizpage/js/main.js') }}"></script>
   </div>
   </body>

</html>