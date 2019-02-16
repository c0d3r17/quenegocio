<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/app.css">
    <title>Que Negocio @yield('title') </title>
</head>
<body>
@section('header')
    <header class="header">

        <span class="lang">lenguaje</span>
        <div class="logo-container">
            <img src="img/logo2.png" alt="logo" class="logo">
        </div>
        <div class="title-container">
            <h1 class="title">Que Negocio</h1>
        </div>
        <nav class="nav-container">
            <ul class="nav main-nav">
                <li class="nav-item">Inicio</li>
                <li class="nav-item">Quienes somos</li>
                <li class="nav-item">Contacto</li>
                <li class="nav-item" id="btn-login">Login / <span class="nav-item__span">Signup</span></li>
            </ul>
        </nav>
    </header>
    <div class="login-container" id="login-container">
        <h3 class="login-title">Ingresa a mi negocio</h3>
        <img src="img/search.svg" alt="seach" class="img-search">
        <h3 class="login-sub-title">Si deseas más beneficios <br> <span>registrate</span></h3>
        <button class="btn btn-primary login-btn">registrate</button>
    </div>
@show

@yield('content')


</body>
</html>