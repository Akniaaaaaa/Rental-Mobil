@extends('layout_user/main1')

@section('title','Car')
@section('title','Data Mobil')

@section('container')
<!--==========================
    Intro Section
  ============================-->
<section id="intro">
  <div class="intro-container">
    <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators"></ol>

      <!-- role="listbox" -->

      <div class="carousel-item active">
        <div class="carousel-background"><img src="assets_user/img/brio.jpeg" width="1550" alt=""></div>
        <div class="carousel-container">
          <div class="carousel-content">
            <h2>Selamat Datang</h2>
            <p>Kami menawarkan Jasa Sewa Mobil di Kota Bengkulu yang aman dan terpercaya bagi setiap orang, baik keperluan bisnis, keluarga
              maupun liburan</p>
            <a href="#services" class="btn-get-started scrollto">Lihat Mobil</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- #intro -->

<main id="main">

  <!--==========================
      Featured Services Section
    ============================-->
  <section id="featured-services">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 box">
          <i class="ion-ios-stopwatch-outline"></i>
          <a style=" font-size: 27px; color:aliceblue;"> 7+ Tahun Pengalaman</i>
            <p class="description mt-2">Permata Rental dimiliki dan dikelola oleh orang yang berpengalaman lama dibidang jasa rental mobil.
              Selama lebih dari 7 tahun kami selalu mementingkan kualitas servis yang kami berikan.
            </p>
        </div>

        <div class="col-lg-4 box box-bg">
          <i class="fa fa-usd" aria-hidden="true"></i>
          <a style=" font-size: 27px; color:aliceblue;"> Harga Bersaing</i>
            <p class="description mt-2">Kami menawarkan harga rental mobil yang kompetitif dengan kualitas servis dan mobil yang dirawat secara teratur, serta berasuransi dengan kondisi yang prima.
            </p>
        </div>

        <div class="col-lg-4 box">
          <i class="fa fa-thumbs-up" aria-hidden="true"></i>
          <a style=" font-size: 27px; color:aliceblue;"> Kualitas Terbaik</i>
            <p class="description mt-2">
              Permata Rental selalu memberikan perawatan mobil baik setelah pemakaian ataupun belum. Serta mobil selalu dalam kondisi bersih dengan keadaan mesin yang bagus.
            </p>
        </div>

      </div>
    </div>
  </section><!-- #featured-services -->

  <section id="about">
    <div class="container">

      <header class="section-header">
        <h3>Tentang</h3>
        <p>
          Permata Rental merupakan perusahaan yang menawarkan jasa penyewaan mobil yang terletak di Kota Bengkulu dan telah berdiri lebih dari tujuh tahun.
          Selalu memberikan mobil terbaik dan terjamin dalam pemakaiannya.
          <style type="text/css">
            #my_centered_buttons {
              display: flex;
              justify-content: center;
            }
          </style>
          <div id="my_centered_buttons">
          </div><br><br>
      </header>


      <!-- Modal -->

      <div class="row about-cols">

        <!-- <div class="col-md-4 wow fadeInUp">
          <div class="about-col">
            <div class="img">
              <img src="http://localhost/siris-labti/assets1/img/about-mission.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-book-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Sejarah</a></h2>
            <p class="text-justify">

              Program Studi S1 Teknik Informatika merupakan salah satu program studi yang bernaung di bawah pengelolaan Fakultas Teknik, Universitas Bengkulu. Program Studi Teknik Informatika telah berdiri&#8230; </p>

          </div>
        </div> -->

        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="about-col">
            <div class="img">
              <img src="http://localhost/siris-labti/assets1/img/about-plan.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-list-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Visi</a></h2>
            <p> Menjadi perusahaan Rental Mobil terbesar, terbaik, dan terpercaya karena memberikan solusi penyewaan kendaraan
              pada berbagai kebutuhan dengan berorientasi kepada kenyamanan berkendara dan kepuasan pelanggan serta memberikan pelayanan terbaik. </p>
          </div>
        </div>

        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="about-col">
            <div class="img">
              <img src="http://localhost/siris-labti/assets1/img/about-plan.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-list-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Misi</a></h2>
            <p>1. Menjadi pilihan utama bagi perusaaan, eksekutif bisnis, dan masyarakat pada umumnya dari berbagai kalangan untuk kebutuhan penyewaan kendaraan</p>
            <p>2. Menjaga kondisi kendaraan yang selalu dalam kondisi prima sehingga layak untuk disewakan demi terciptanya kenyamanan berkendara dan kepuasan pelanggan</p>
            <p>3. Selalu mampu memberikan solusi penyewaan mobil untuk kebutuhan bisnis, perusahaan/kantor, keluarga mauoun kebutuhan personal</p>
          </div>
        </div>



      </div>

    </div>
  </section><!-- #about -->

  <!--==========================
   mobil
 ============================-->
  <section id="services">
    <div class="container">

      <header class="section-header wow fadeInUp">
        <h3>Mobil</h3>
        <p>Silahkan Melihat Informasi-informasi Terbaru Tentang Mobil Pada Permata Rental Bengkulu</p>
      </header>

      <div class="row m-5">



        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12 mb-4">
              <img src="{{ url('images/logo.png')}}" class="rounded mx-auto d-block" width="500" alt="">
            </div>
            @foreach($tb_mobil as $m)
            <div class="col-md-4">
              <div class="card mb-5">
                <img src="{{asset('storage/' . $m->gambar) }}" class="card-img-top" alt="..." style="width: 300px; height: 200px;">
                <div class="card-body">
                  <h5 class="card-title">{{ $m->merek }}</h5>
                  <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($m->harga, 2) }} per hari
                    <hr>
                    <strong>Status :</strong> {{ $m->status }}
                    <br>
                    <strong>Tipe :</strong>

                    {{ $m->kd_tipe}}
                  </p>
                  <a href="/user/{{$m->id}}/create" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Sewa</a>
                  <a href="/user/{{$m->id}}/show" class="btn btn-success"><i class="fas fa-shopping-cart"></i> detail</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>




        <!-- Modal Tentang-->
        <!-- <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-justify">
                <strong> Pendaftaran Asisten Praktikum</strong>
                <strong> Jadwal Praktikum Laboratorium</strong>
                <strong> Daftar Dosen Informatika</strong>
                <br>
                Silahkan menghubungi dosen terkait mata kuliah yang dipilih. Silahkan Memerika jadwal praktikum di link berikut : Silahkan <br> <br>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-justify">
                <strong>SEJARAH LABORATORIUM INFORMATIKA</strong><br>
                Program Studi S1 Teknik Informatika merupakan salah satu program studi yang bernaung di bawah pengelolaan Fakultas Teknik, Universitas Bengkulu. Program Studi Teknik Informatika telah berdiri sejak tahun 2003 bersamaan dengan didirikannya Fakultas Te <br> <br>
                <strong>VISI</strong><br>
                Menjadi program studi teknik informatika unggulan yang mampu menyediakan tenaga ahli yang kompeten, memiliki integritas kepribadian tinggi, tanggap terhadap perkembangan ilmu pengetahuan, teknologi, dan tuntutan masyarakat, khususnya yang berkaitan dengan bidang keahlian teknik informatika. <br><br>
                <strong>MISI</strong><br>
                Menyelenggarakan kegiatan pendidikan teknik informatika untuk menjamin perkembangan dan peningkatan kualitas, akuntabilitas, fungsi dan peran program studi.
                Menciptakan suasana akademik yang kondusif bagi sivitas akademika untuk secara aktif baik individu maupun kolektif untuk berkembang sesuai etika dan keilmuan.
                Pengembangan di bidang sistem informasi, software engineering, dan hardware implementation. </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>



      </div> -->
  </section><!-- #services -->



  <!--==========================
  TIM
 ============================-->
  <!-- <section id="team">
    <div class="container">
      <div class="section-header wow fadeInUp">
        <h3>Tim</h3>
        <p>Struktur Laboratorium Informatika Universitas Bengkulu</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 wow fadeInUp"> -->
  <!--<div class="member">
           <img src="img/team-1.jpg" class="img-fluid" alt="">
           <div class="member-info">
             <div class="member-info-content">
               <h4>Walter White</h4>
               <span>Chief Executive Officer</span>
               <div class="social">
                 <a href=""><i class="fa fa-twitter"></i></a>
                 <a href=""><i class="fa fa-facebook"></i></a>
                 <a href=""><i class="fa fa-google-plus"></i></a>
                 <a href=""><i class="fa fa-linkedin"></i></a>
               </div>
             </div>
           </div>
         </div>-->
  </div>

  <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="member">
            <img src="{{ asset('bizpage/img/desi.jpg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Desi Andreswari, S.T., M.Cs.</h4>
                <span>Kepala Laboratorium</span>
                <div class="social">

                  <a href="https://www.facebook.com/dezieandrez"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/desiandreswari/?hl=id"><i class="fa fa-instagram"></i></a>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="member">
            <img src="{{ asset('bizpage/img/pakhenn.jpg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Asisten Laboratorium</h4>
                <span>Hendri Z, S.Kom</span>
                <div class="social">
                  <a href="https://www.facebook.com/hendri.hen.12/"><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s"> -->
  <!--<div class="member">
           <img src="img/team-4.jpg" class="img-fluid" alt="">
           <div class="member-info">
             <div class="member-info-content">
               <h4>Amanda Jepson</h4>
               <span>Accountant</span>
               <div class="social">
                 <a href=""><i class="fa fa-twitter"></i></a>
                 <a href=""><i class="fa fa-facebook"></i></a>
                 <a href=""><i class="fa fa-google-plus"></i></a>
                 <a href=""><i class="fa fa-linkedin"></i></a>
               </div>
             </div>
           </div>
         </div>-->
  <!-- </div>

      </div>

    </div>
  </section>#team -->

  <!--==========================
   Contact Section
 ============================-->
  <section id="contact" class="section-bg wow fadeInUp">
    <div class="container">

      <div class="section-header">
        <h3>Hubungi Kami</h3>
        <p>Jika memiliki pertanyaan silahkan kebawah ini </p>
      </div>

      <div class="row contact-info">

        <div class="col-md-6">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>Alamat</h3>
            <address>

              Jl. Hibrida Raya Ujung rt.08 rw.02 no.07 Kel. Pagar dewa Kec. Selebar Kota Bengkulu </address>
          </div>
        </div>

        <div class="col-md-6">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3>Telepon</h3>
            <p> 0823-8000-8887 </p>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

@endsection