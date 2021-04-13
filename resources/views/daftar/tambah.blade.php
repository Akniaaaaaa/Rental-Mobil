<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets_user/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    <div class="container">


        <div class="card o-hidden border-1 shadow-lg my-5 mt-5">
            <div class="card-body p-5">
                <!-- Nested Row within Card Body -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Daftar</h1>
                    </div>
                        
                        <form method="post" action="/pelanggan" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <div class="form-group ml-2">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control @erorr('name') is-invalid 
                                        @enderorr" id="name" placeholder="Masukkan Nama Penyewa" name="name" value="{{  old('name') }}">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group ml-2">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email Penyewa" name="email" value="{{ old('email') }}">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group ml-2">
                                                <label for="no_ktp">No. KTP</label>
                                                <input type="text" class="form-control
                                                @error('no_ktp') is-invalid @enderror" id="no_ktp" placeholder="Masukan No. KTP" name="no_ktp" value="{{ old('no_ktp') }}">
                                                @error('no_ktp')
                                                <div class="invalid-feedback">
                                                    {{$message}}</div>
                                                    @enderror
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group mr-2">
                                                    <label for="no_hp">No. HP</label>
                                                    <input type="text" class="form-control
                                                    @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Masukan No. HP Penyewa" name="no_hp" value="{{ old('no_hp') }}">
                                                    @error('no_hp')
                                                    <div class="invalid-feedback">
                                                        {{$message}}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mr-2">
                                                        <label for="alamat">Alamat</label>
                                                        <input type="text" class="form-control
                                                        @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat Penyewa" name="alamat" value="{{ old('alamat') }}">
                                                        @error('alamat')
                                                        <div class="invalid-feedback">
                                                            {{$message}}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
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
                                                            
                                                            
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <div class="form-check">
                                                                        <input 
                                                                        class="form-check-input @error('role') is-invalid @enderror"
                                                                        id="role"
                                                                        type="checkbox" 
                                                                        name="role" 
                                                                        value="pelanggan" 
                                                                        id="role" {{ old('role') ? 'checked' : '' }}>
                                                                        
                                                                        <label class="form-check-label" for="role">
                                                                            {{ __('Pelanggan') }}
                                                                        </label>
                                                                        
                                                                        @error('role')
                                                                        <div class="invalid-feedback">
                                                                            {{$message}}
                                                                        </div>
                                                                        @enderror
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mr-2">
                                                                    <label for="gambar">Gambar</label>
                                                                    <input type="file" class="form-control
                                                                        @error('gambar') is-invalid @enderror" id="gambar" placeholder="Masukan gambar KTP" 
                                                                        name="gambar" value="{{ old('gambar') }}">
                                                                            @error('gambar')
                                                                            <div class="invalid-feedback">
                                                                                {{$message}}</div>
                                                                                @enderror
                                                                            </div>
                                                                <button type="submit" class="btn btn-dark mt-4 mb-3">Simpan</button>
                                                                <button type="reset" class="btn btn-danger mt-4 mb-3">Reset</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    
                                             
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
                                        
                                        
                                     <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets_user/js/sb-admin-2.min.js"></script>

</body>

</html>