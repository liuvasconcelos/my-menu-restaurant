<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Menu Restaurant</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="jquery-ui">

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
                                <li class="current"><a href="{{route('home')}}">Home</a></li>
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
        <div class="row">
            <div class="grid_4">
                <div class="banner">
                    <div class="gall_block">
                        <img src="images/page1_img1.jpg" alt="">
                        <div class="bann_capt ">
                            <div class="maxheight">
                                <img src="images/icon2.png" alt="">
                                <div class="bann_title">Entradas</div>
                                <a href="{{route('register')}}">cadastrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="banner">
                    <div class="gall_block">
                        <div class="bann_capt  bn__1">
                            <div class="maxheight">
                                <img src="images/icon1.png" alt="">
                                <div class="bann_title">Principais</div>
                                <a href="{{route('register')}}">cadastrar</a>
                            </div>
                        </div>
                        <img src="images/page1_img2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="banner ">
                    <div class="gall_block">
                        <img src="images/page1_img3.jpg" alt="">
                        <div class="bann_capt  bn__2">
                            <div class="maxheight">
                                <img src="images/icon3.png" alt="">
                                <div class="bann_title">Sobremesas</div>
                                <a href="{{route('register')}}">cadastrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

