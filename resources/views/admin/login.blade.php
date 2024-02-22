<!DOCTYPE html>
<html>

<head>
    <title>GARDA ORGANIZER ADMINISTRATOR V.1.0.0</title>
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

    {{-- /* Disable zooming on mobile devices */ --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="{{ asset('signin/css/bootstrap.min.css')}}">
    {{--integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"--}}    
    <link rel="stylesheet" type="text/css" href="{{ asset('signin/css/style.css')}}">
    <link type="text/css" href="{{ asset('signin/css/font-awesome.min.css')}}" rel="stylesheet">
    {{--    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"--}}
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
    {{-- <link type="text/css" href="{{ asset('signin/css/css2?family=Open+Sans:wght@300;600&display=swap')}}"
        rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('sweet/dist/sweetalert.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        html, body {
            height: 100%;
        }
        /* Set the background image */
        body {
        background-image: url('{{ asset('signin/image/bg_sisuka_login.png')}}');
        background-size: cover;
        background-position: :left;
        background-repeat: no-repeat;
        }


        @font-face {
        font-family: 'Poppins';
        src: url('/fonts/Poppins-Regular.ttf');
        font-weight: normal;
        font-style: normal;
    }

    .poppins {
        font-family: 'Poppins', sans-serif;
        src: url('/fonts/Poppins-Regular.ttf');
        }

        /* Center the login form */
        .login-form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        }

        /* Set the width of the login form */
        .login-form form {
        width: 400px;
        }

        /* Set the max width of the login form */
        @media (max-width: 768px) {
        .login-form form {
            width: 90%;
             }
        }
    </style>
</head>

<body>
    <br>
    <br>
    <br>
    <div class="container hq-template" style="float: left;">
        <form method="post" action="{{ route('login') }}">
            @csrf
            <div class="row" style="display: list-item;">
                <div class="login-block col-lg-6 col-md-7 col-sm-12 col-12" style="text-align: -webkit-center;margin-left: 15%;-webkit-text-stroke: thin;">
                    <!-- <h3 class="mb-3">user login</h3> -->
                    <div class="pic-logo col-lg-5 col-md-5 col-sm-9 col-10">
                        <img src="{{ asset('signin/image/logo.png') }}">
                    </div>
                    <br>
                    <h5 class="poppins">Sistem Informasi Surat Masuk dan Keluar</h5>
                    <h6 class="poppins">v.3.0.25</h6>
                    <br>
                    <div class="form-group mb-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                            </div>
                            <input type="text" name="username" class="form-control form-control-lg poppins" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-lock-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z" />
                                    <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
                                </svg></span>
                            </div>
                            <input type="password" name="password" class="form-control form-control-lg poppins" placeholder="Password">
                        </div>
                    </div>
                    <div class="login-btn">
                        <button class="login100-form-btn btn-block" type="submit">
                            Login
                        </button>
                    </div>

                </div>
            </div>

        </form>

    </div>
    <div class="copyright">
    </div>
    <script src="{{ asset('sweetalert/sweetalert.min.js') }}"></script>
    <script type="text/javascript">

	<?php if (Session::get('logout')): ?>
        swal("", "Berhasil Logout", "success");
    <?php endif; ?>

	<?php if (Session::get('notexistuser')): ?>
        swal("", "User tidak terdaftar di aplikasi sisuka", "info");
    <?php endif; ?>

	<?php if (Session::get('y')): ?>
        swal("", "User/password salah, silahkan coba lagi", "error");
    <?php endif; ?>

	<?php if (Session::get('wrongauth')): ?>
        swal("", "User/password salah, silahkan coba lagi", "error");
    <?php endif; ?>

    </script>
</body>

</html>
