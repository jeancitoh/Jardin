<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/login/css/style.css')}}">
    <title>Iniciar Seción - Terra Pets</title>
</head>

<body>
    <div class="contenedor-pag">
        <div class="contenedor-imagen form-img">
            <img src="{{ asset('assets/login/img/Banner-min.jpg')}}" class="Imagensssss">
        </div>
        <div class="form-img">
            <div class="form-contenedor">
                <div class="inner">
                    <div class="contenedor-texto">
                        <h1 class="titulo">¡Bienvenido a The Lions King!</h1>
                        <p class="descripcion">Ingresa tu cuenta como trabajador del establecimiento.</p>
                        <form method="POST" action="{{ route('login') }}" class="formulario login"
                            id="FormularioLogin">
                            @csrf
                            <div class="form-grupo">
                                <input type="text" class="form-control" placeholder="Correo Electronico"
                                    name="email" id="email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-grupo">
                                <input type="password" class="form-control" placeholder="Contraseña" name="password"
                                    id="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="btnlogin">
                                <button class="btn btlogin" id="btnLogin" type="submit">
                                    {{ __('Iniciar Sesión') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="btn-register">
                ¿Olvidaste tu contraseña? <a href="{{ route('register') }}" class="link">¡Recupera tu contraseña en unos simples pasos ahora!</a>
            </div>
        </div>
    </div>
</body>

</html>
