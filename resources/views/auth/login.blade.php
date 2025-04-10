<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="fitweb live">
    <meta name="keywords" content="Gym, fitweb live colombia, fitweb, live, colombia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Css Styles -->


    <link rel="stylesheet" href="frontendlandingpage/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="frontendlandingpage/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="frontendlandingpage/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="frontendlandingpage/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="frontendlandingpage/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="frontendlandingpage/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="frontendlandingpage/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="frontendlandingpage/css/materialdesignicons.min.css" type="text/css">
    <link rel="stylesheet" href="frontendlandingpage/css/app.css" type="text/css">

</head>


<section class="login-section d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="{{ asset('frontendlandingpage/img/hero/hero8c.png') }}" alt="login" class="login-card-img">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <!-- Logo centrado encima del título -->
                        <div class="logo text-center col-6 col-lg-4 mx-auto">
                            <img src="{{ asset('frontendlandingpage/img/logotipo.png') }}" alt="logo" class="login-logo">
                        </div>

                        @if (session('error'))
                            <div class="alert alert-danger my-3 text-center">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <p class="login-card-description text-center">Inicia sesión en tu cuenta</p>

                            <div class="form-group">
                                <input type="email" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Correo electrónico" required autofocus
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback d-block text-center">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <input type="password" name="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Contraseña" required>
                                @error('password')
                                    <div class="invalid-feedback d-block text-center">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Iniciar sesión">

                            <a href="{{ url('/') }}" class="btn btn-black btn-block">Regresar al Inicio</a>

                            <div class="pt-4 text-center mt-3">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}"  style="color: #f36100;">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('landingpage.footer')