<html>

<head>
  <title> Surat Bukti Sewa Mobil </title>
</head>

<body bgcolor="white">
  {{-- <font face="Arial" color="black"> <p align="center"> PEMERINTAH KOTA CIREBON </p></font> --}}
  {{-- <font face="Times New Roman" color="blue"> <p align="center"> PERUSAHAAN PENYEWAAN MOBIL KOTA BENGKULU</p></font> --}}
  <font face="Times New Roman" color="BLACK" size=4>
    <p align="center"><b> PERUSAHAAN PENYEWAAN MOBIL KOTA BENGKULU</b></p>
  </font>
  <font face="Times New Roman" color="BLACK" size=3>
    <p align="center"> PERMATA RENTAL</p>
  </font>
  {{-- <font face="Arial" color="green"> <p align="center"> PERMATA RENTAL </p></font> --}}
  <font face="Times New Roman" color="black" size="2">
    <p align="center"> <i>Alamat. Jl. Hibrida raya ujung rt.08./02 no.07 kel. Pagar dewa Kec. Selebar kota bengkulu </i></p>
  </font>
  <font face="Times New Roman" color="black" size="1">
    <p align="center"> <i>0823-8000-8887</i></p>
  </font>
  <hr>
  <font face="Arial" color="BLACK" size="4">
    <p align="center"> <u> <b> SURAT BUKTI SEWA MOBIL </b></u>
  </font><br>
  {{-- <font face="Arial" color="red" size="4"> Nomer: 8021/SMKN1/2015 </p></font> --}}

  <p align="center">
    Saya yang bertanda tangan di bawah ini, selanjutnya disebut pihak Penyewa:

  </p>

  <p align="left">
    <font face="Arial">
      <pre>
          Nama               :  {{$pelanggan->name}}
          NIK                   : {{$pelanggan->no_ktp}}
          Jenis Kelamin  :  {{$pelanggan->jk}}
          No HP              :  {{$pelanggan->no_hp}}
          Email               :  {{$pelanggan->email}}
          Alamat             :  {{$pelanggan->alamat}}
          </pre>
    </font>

    <p align="center">
      Menyewa mobil di Permata Rental Sebagai berikut:
    </p>
    <pre>
  <p align="left"><font face="Arial">
  Merek                   :{{$tb_trx->mobil->merek}}
  No. Plat                :{{$tb_trx->mobil->no_plat}}
  Tanggal Sewa      :{{$tb_trx->tgl_rental}}
  Tanggal Kembali  :{{$tb_trx->tgl_kembali}}
  Pengambilan        :{{$tb_trx->pengambilan}}
@php
$date1     = date_create($tb_trx->tgl_rental);
$date2   = date_create($tb_trx->tgl_kembali);
$cek_telat = date_diff($date1,$date2); 
$telat   = $cek_telat->format("%a");
$total=$telat*($tb_trx->mobil->harga);
@endphp
  Harga Sewa         :Rp. {{(number_format($total, 2))}}
  </pre>

    Dengan ini saya menyatakan bahwa :
    <br>
    1. Bersedia membayar lunas biaya tersebut di atas paling lambat pada saat menerima kunci, apabila pemakaian melebihi jangka waktu sewa, maka dikenakan biaya tambahan sesuai tarif dan dibayarkan pada saat pengembalian kunci.
    <br>
    2. Bersedia merawat, menjaga serta memanfaatkan dengan baik mobil yang saya sewa.
    <br>
    3. Tidak menggunakan mobil untuk yang melanggar hukum seperti membawa narkoba, buronan, teroris, barang curian, merampok, dsb.
    <br>
    4. Jika terjadi kecelakaan pada saat masa sewa, maka saya tidak akan menuntut tentang asuransi pengemudi dan penumpang.
    <br>
    5. Pada saat pengembalian mobil, kondisi kendaraan dan bahan bakar sama pada posisi awal pemakaian. Dan apa bila tidak sesuai, maka tanggung jawab tersebut dibebankan kepada penyewa.
    <br>
    6. Apabila kendaraan tidak diantarkan ke tempat, maka dikenakan biaya sebesar harga sewa mobil yang disewa
    <br>
    <p>

      Demikian surat perjanjian ini saya buat dengan sebenar-benarnya.
    </p>
    </font>
  </p>
  <p align="right">
    ..........,..............................
    <br>
    Penyewa,
    <p>





    </p>
    <br>
    <p align="right">
      (.........................................)
    </p>

    <script type="text/javascript">
      window.print();
    </script>
</body>

</html>