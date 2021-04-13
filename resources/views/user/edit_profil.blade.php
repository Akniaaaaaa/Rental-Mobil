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

</head>

<body class="bg-success">

    <div class="container mt-5">


        <div class="card o-hidden border-1 shadow-lg my-5 mt-3">
            <div class="card-body p-5 mt-5">
                <!-- Nested Row within Card Body -->
                <center>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <h3 class="m-0 font-weight-bold text-dark">Form Ubah Data Profil Penyewa Permata Rental</h3>
               <hr>
                </center>
                <form method="post" action="{{ route('user.update', $pelanggan->id) }}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group ml-2">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control @erorr('name') is-invalid 
                                @enderorr" id="name" placeholder="Masukkan Nama Penyewa" name="name" value="{{ $pelanggan->name }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group ml-2">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email Penyewa" name="email" value="{{ $pelanggan->email }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="no_ktp">No. KTP</label>
                                        <input type="text" class="form-control
                                        @error('no_ktp') is-invalid @enderror" id="no_ktp" placeholder="Masukan No. KTP" name="no_ktp" value="{{ $pelanggan->no_ktp }}">
                                        @error('no_ktp')
                                        <div class="invalid-feedback">
                                            {{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mr-2">
                                            <label for="jk">Ubah Password</label>
                                            <input type="password" class="form-control
                                                        @error('password') is-invalid @enderror" id="password" placeholder="Ubah Password" name="password" value="{{ $pelanggan->password }}">
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{$message}}</div>
                                            @enderror
                                        </div>
                                        {{-- <div class="form-group mr-2">
                                            <label for="gambar">Gambar</label>
                                            <input type="file" class="form-control
                                            @error('gambar') is-invalid @enderror" id="No Plat" placeholder="Masukan gambar" 
                                            name="gambar" value="{{ $pelanggan->gambar }}">
                                            @error('gambar')
                                            <div class="invalid-feedback">
                                                {{$message}}</div>
                                                @enderror
                                            </div> --}}
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group mr-2">
                                                <label for="no_hp">No. HP</label>
                                                <input type="text" class="form-control
                                                @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Masukan No. HP Penyewa" name="no_hp" value="{{ $pelanggan->no_hp }}">
                                                @error('no_hp')
                                                <div class="invalid-feedback">
                                                    {{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group mr-2">
                                                    <label for="alamat">Alamat</label>
                                                    <input type="text" class="form-control
                                                    @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat Penyewa" name="alamat" value="{{ $pelanggan->alamat }}">
                                                    @error('alamat')
                                                    <div class="invalid-feedback">
                                                        {{$message}}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jk">Jenis Kelamin</label>
                                                        <select class="form-control @error('jk') is-invalid @enderror" id="inputGroupSelect01" name="jk" required autocomplete="jk" autofocus>
                                                            <option value="{{ old('jk') }}" selected>Jenis Kelamin</option>
                                                            <option value="Laki-laki">Laki-laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                        @error('jk')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    
                                                    
                                                   
                                                   <button type="submit" class="btn btn-dark mt-4 ">Simpan</button>
                                                   <a href="/" class="btn btn-primary mt-4"> Kembali</a>
                                                   {{-- <button type="reset" class="btn btn-danger mt-4 mt-3">Reset</button> --}}
                                               </div>
                                           </div>
                                                    {{-- <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" class="form-control
                                                                @error('role') is-invalid @enderror" id="role"
                                                                type="checkbox" name="role" value="pelanggan" id="role" {{ old('role') ? 'checked' : '' }}>
                                                                
                                                                <label class="form-check-label" for="role">
                                                                    {{ __('Pelanggan') }}
                                                                </label>
                                                                @error('role')
                                                                <div class="invalid-feedback">
                                                                    {{$message}}</div>
                                                                    @enderror
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                         --}}
                                            </form>
                {{-- <form method="post" action="{{ route('pelanggan.update', $pelanggan->id) }}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf

                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Edit Profile</h1>
                    </div>
                    <form class="user">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Penyewa" name="name" value="{{ $pelanggan->name }}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email Penyewa" name="email" value="{{ $pelanggan->email }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <select class="form-control @error('jk') is-invalid @enderror" id="inputGroupSelect01" name="jk" required autocomplete="jk" autofocus>
                                <option value="{{ $pelanggan->jk }}" selected>{{ $pelanggan->jk }}</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control
                                        @error('no_ktp') is-invalid @enderror" id="no_ktp" placeholder="Masukan No. KTP" name="no_ktp" value="{{ $pelanggan->no_ktp }}">
                            @error('no_ktp')
                            <div class="invalid-feedback">
                                {{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control
                                        @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Masukan No. HP Penyewa" name="no_hp" value="{{ $pelanggan->no_hp }}">
                            @error('no_hp')
                            <div class="invalid-feedback">
                                {{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control
                                        @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat Penyewa" name="alamat" value="{{ $pelanggan->alamat }}">
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mr-2">
                            <input type="password" class="form-control
                                        @error('password') is-invalid @enderror" id="password" placeholder="Ubah Password" name="password" value="{{ $pelanggan->password }}">
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Simpan
                            </button>
                            <button href=" user/profile" class="btn btn-primary btn-user btn-block">
                                Kembali
                            </button>

                        </div>
                        {{-- <div class="text-center">
                            <button class="btn btn-danger" id="reset-button" type="reset">Reset</button>
                        </div> --}} 

            </div>
        </div>


        <!-- <div class="text-center">
                            <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                        </div> -->


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