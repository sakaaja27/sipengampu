<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/adminlte.min.css') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/logo/logo.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/logo/logo.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/logo/logo.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/logo/logo.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/logo/logo.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/logo/logo.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/logo/logo.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/logo/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo/logo.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/logo/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo/logo.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/logo/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo/logo.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('images/logo/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>

</head>

<body class="hold-transition login-page white-preview">

    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <div class="login-logo mb-4 text-center">
            <img src="{{ asset('images/logo/logo.png') }}" class="mb-4" style="width: 150px" />
            <h3>TEACH MAP</h3>
            <h3><b>POLITEKNIK NEGERI JEMBER</b></h3>
        </div>
        <div class="card col-md-6 col-lg-4 col-sm-8 col-xs-12">
            <div class="card-body login-card-body">
                <?php if(isset($_GET['gagal'])) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> <b>Login gagal</b></h5>
                    <b>Silahkan periksa kembali akun anda !</b> <br>
                    <i>Atau jika ada kendala, silahkan hubungi Admin</i>
                </div>
                <?php } ?>
                <p class="login-box-msg text-center">Pilih peran untuk masuk ke sistem</p>
                <form action="{{ route('login.auth') }}" method="post">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <div class="btn-container mt-3 mb-3" style="transform: scale(1.5, 1.5);">
                            <i class="fa fa-sun-o" aria-hidden="true"></i>
                            <label class="switch btn-color-mode-switch">
                                <input type="checkbox" name="status_pegawai" id="color_mode" value="1">
                                <label for="color_mode" data-on="ADMIN" data-off="USER"
                                    class="btn-color-mode-switch-inner"></label>
                            </label>
                            <i class="fa fa-moon-o" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="NIP" name="nip">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block col-12">Masuk</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="{{asset ('plugins/jquery/jquery.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $("#color_mode").on("change", function() {
                colorModePreview(this);
            })
        });

        function colorModePreview(ele) {
            if ($(ele).prop("checked") == true) {
                $('body').addClass('dark-preview');
                $('body').removeClass('white-preview');
            } else if ($(ele).prop("checked") == false) {
                $('body').addClass('white-preview');
                $('body').removeClass('dark-preview');
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('vendor/js/adminlte.min.js') }}"></script>
</body>

</html>
