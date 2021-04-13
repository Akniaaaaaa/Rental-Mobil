<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  {{-- //bagian tab chrome --}}
  <title>Sistem Informasi Permata Rental</title>
  <link rel="shortcut icon" type="image/x-icon" href="download.jpg" />
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

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">
            <i class="fa fa-car" aria-hidden="true"></i>Permata Rental</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">beranda</a></li>
          <li><a href="#about">tentang</a></li>
          <li><a href="#services">mobil</a></li>
          <li><a href="#contact">Kontak</a></li>
          {{-- <li><a href="/login" name="login">login</a></li> --}}
         
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>           
            <ul class="dropdown-menu">
              {{-- @if(auth()->user()->role == 'pelanggan') --}}
              <li><a href="user/profile"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
              {{-- @endif --}}
              <!-- <li><a href="/ubahpass"><i class="lnr lnr-user"></i> <span>Ubah Password</span></a></li> -->
              <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
          @endguest
            </ul>
          </li>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
          </ul>
          
        </nav><!-- #nav-menu-container -->
      </div>
    </header><!-- #header -->
    
    <!--==========================
      Intro Section
      ============================-->
      
      
      <main id="main">
        
        @if (session('status'))
        <div class="alert alert-dark">
          <center>
          <h3>   {{ session('status') }}</h3>
          </center>
        </div>
        @endif
    @yield('container')

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <div id="logo" class="pull-left">
              <a href="#intro" class="scrollto">
                <h3><i class="" aria-hidden="true"></i>Permata Rental</a></h3>
            </div>
            <p> Permata Rental merupakan perusahaan yang menawarkan jasa penyewaan mobil yang terletak di Kota Bengkulu dan telah berdiri lebih dari tujuh tahun.
              Selalu memberikan mobil terbaik dan terjamin dalam pemakaiannya.</p>
          </div>
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Link</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#intro">BERANDA</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">TENTANG </a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">MOBIL</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#contact">KONTAK</a></li>
              <!-- <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li> -->
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Jl. Hibrida Raya Ujung rt.08 rw.02 no.07 Kel. Pagar dewa Kec. Selebar Kota Bengkulu <br>
              <strong>Phone:</strong> 0823-8000-8887<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

           <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <!-- <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits"> -->
    <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
    <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>#footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

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

    <!--adminn-->
    <!-- jQuery -->
<script src="{{url('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{url('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{url('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{url('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('assets/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('assets/dist/js/pages/dashboard.js')}}"></script>
</body>

</html>