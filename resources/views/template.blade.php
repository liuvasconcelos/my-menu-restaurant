<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Menu Restaurant</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="jquery-ui">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="stylesheet" href="booking/css/booking.css">
    <link rel="stylesheet" href="css/stuck.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="page1" id="top">

<header>
    <section id="stuck_container">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <h1 style="font-size: 80px">
                        <p>My Menu Restaurant</p>
                    </h1>
                    <div class="navigation">
                        <nav>
                            <ul class="sf-menu">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('register')}}">Cadastros</a></li>
                                <li><a href="{{route('reservation')}}">Reservas</a></li>
                                <li><a href="{{route('tablecontrol')}}">Controle de mesas</a></li>
                                <li><a href="{{route('logout')}}">SAIR</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>

<section class="content">
    <div class="container">
        @yield('principal')
    </div>
</section>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <div class="copyright"><span class="brand">My Menu Restaurant </span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <div>System made by Lívia Vasconcelos</div>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>