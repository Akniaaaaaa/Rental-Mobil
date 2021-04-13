<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sewa Mobil</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  
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
  
  
  {{-- formulir --}}
  <div class="card  ">
    <div class="container">
      <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
          <center>            
            <h6 class="m-0 font-weight-bold text-success">Formulir Penyewaan Mobil Permata Rental</h6>
          </center>
        </div>
        <div class="row">
          <div class="col-10">
            
            {{-- <form method="post" action="{{ route('mobil.store', $tb_mobil->id) }}" enctype="multipart/form-data"> --}}
              <form method="post" action="{{ route('mobil.store', $tb_mobil->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="row ml-3">
                  <div class="col-md-6">
                    
                    <div class="form-group mt-3">
                      <label for="tgl_rental">Tanggal Sewa</label>
                      <input type="date" class="form-control @error('tgl_rental') is-invalid @enderror" id="tgl_rental" placeholder="Masukan tanggal sewa" name="tgl_rental" value="{{ old('tgl_rental') }}">
                      @error('tgl_rental')
                      <div class="invalid-feedback">
                        {{$message}}</div>
                        @enderror
                      </div>
                      
                      <div class="form-group">
                        <label for="tgl_kembali">Tanggal Kembali</label>
                        <input type="date" class="form-control @error('tgl_kembali') is-invalid @enderror" id="tgl_kembali" placeholder="Masukan tanggal kembali" name="tgl_kembali" value="{{ old('tgl_kembali') }}">
                        @error('tgl_kembali')
                        <div class="invalid-feedback">
                          {{$message}}</div>
                          @enderror
                        </div>
                        
                        <div class="form-group">
                          <label>Pilih Pengambilan</label>
                          <select name="pengambilan" class="form-control @error('pengambilan') is-invalid
                          @enderror" value="pengambilan">
                          <option value="">--Pilih Pengambilan Mobil--</option>
                          <option value="ambil ke toko">--Ambil ke toko--</option>
                          <option value="antar alamat">--Antar alamat--</option>
                        </select>
                        @error('pengambilan')
                        <div class="invalid-feedback">
                          {{$message}}</div>
                          @enderror
                          
                        </div>
                        {{-- <button type="button" class="btn btn-sm btn-flat btn-success btn-filter" data-toggle="modal" data-target="#modal-filter">filter Tanggal</button> --}}
                        {{-- <strong>Total :</strong> Rp. --}}
                        {{-- {{(number_format($tb_transaksi->tgl_rental->diff$tb_transaksi->tgl_kembali)*$tb_transaksi->mobil->harga, 2)}} --}}
                        <hr>
                        @if ($tb_mobil->status='tersedia')
                        <button type="submit" class="btn btn-success mt-2 mb-5" >Simpan</button>

                        @endif
                        <a type="button" href="/user" class="btn btn-primary mt-2 mb-5">Kembali</a>
                        <button type="reset" class="btn btn-danger mt-2 mb-5">Reset</button>
                        
                      </form>
                    </div>
                    <div class="card mx-auto mt-3 mb-5">
                      <img src="{{asset('storage/' . $tb_mobil->gambar) }}" class="card-img-top" alt="..." style="width: 300px; height: 200px;">
                      <div class="card-body">
                        <h5 class="card-title">{{ $tb_mobil->merek }}</h5>
                        <strong>Harga :</strong> Rp. {{ number_format($tb_mobil->harga, 2) }}
                        per hari
                        <p class="card-text">
                          <strong>Status :</strong> {{ $tb_mobil->status }}
                          <br>
                          <strong>Tipe :</strong>
                          <strong>Warna :</strong> {{ $tb_mobil->warna }}
                          <br>
                          <strong>Tahun :</strong> {{ $tb_mobil->tahun }}
                          <br>
                          <strong>Nomor Polisi :</strong> {{ $tb_mobil->no_plat }}
                          <br>
                          <strong>Tipe :</strong>
                          {{ $tb_mobil->kd_tipe}}
                        </p>
                        
                      </div>
                    </div>
                  </div>
                  
                </table>
              </div>
            </div>
          </div>
          
          <!--==========================
            Footer
            ============================-->
            <!-- <footer id="footer">
              <div class="footer-top">
                <div class="container">
                  <div class="row">
                    
                    <div class="col-lg-3 col-md-6 footer-info">
                      <h3>BizPage</h3>
                      <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 footer-links">
                      <h4>Useful Links</h4>
                      <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
                      </ul>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 footer-contact">
                      <h4>Contact Us</h4>
                      <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
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
              
              <div class="container">
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
                  <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
                  <!-- </div> -->
                  <!-- </div> -->
                  <!-- </footer>#footer -->
                  
                  <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->
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
                  
                </body>
                
                </html>