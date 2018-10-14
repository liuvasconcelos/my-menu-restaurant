<!DOCTYPE html>
<html lang="en">
<head>
    <title>Controle de mesas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>

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
                                <li class="current"><a href="{{route('tablecontrol')}}">Controle de mesas</a></li>
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
        <div class="row">
            <div class="grid_7" style="min-height: 400px">
                <a href="#" class="btn" style="background-color: aquamarine; color: black">Mesa 01</a>
                <a href="#" class="btn" style="background-color: aquamarine; color: black">Mesa 02</a>
                <a href="#" class="btn" style="background-color: aquamarine; color: black">Mesa 03</a>
                <a href="#" class="btn" style="background-color: lightcoral; color: black">Mesa 04</a>
                <a href="#" class="btn" style="background-color: aquamarine; color: black">Mesa 05</a>
                <a href="#" class="btn" style="background-color: lightcoral; color: black">Mesa 06</a>
                <a href="#" class="btn" style="background-color: lightcoral; color: black">Mesa 07</a>
                <a href="#" class="btn" style="background-color: lightcoral; color: black">Mesa 08</a>
                <a href="#" class="btn" style="background-color: aquamarine; color: black">Mesa 09</a>
                <a href="#" class="btn" style="background-color: aquamarine; color: black">Mesa 10</a>
                <a href="#" class="btn" style="background-color: aquamarine; color: black">Mesa 11</a>
                <a href="#" class="btn" style="background-color: aquamarine; color: black">Mesa 12</a>
                <a href="#" class="btn" style="background-color: lightblue; color: black">Mesa 13</a>
                <a href="#" class="btn" style="background-color: lightblue; color: black">Mesa 14</a>
            </div>
        </div>
</section>

<footer id="footer" >
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <div class="copyright" ><span class="brand">My Menu Restaurant </span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <div>System made by Lívia Vasconcelos</div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

