<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cadastros</title>
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
                                <li class="current"><a href="{{route('register')}}">Cadastros</a></li>
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

<section class="content gallery pad1">
    <div class="container">
        <div class="row">
            <div class="grid_4">
                <div class="gall_block">
                    <div class="maxheight">
                        <a href="images/bbig1.jpg" class="gall_item"><img src="images/page2_img1.jpg" alt=""></a>
                        <div class="gall_bot">
                            <div class="text1"><a href="#">Entradas</a></div>
                            <br>
                            <a href="{{route('registeraitem')}}" class="btn">Cadastrar</a></div>
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="gall_block">
                    <div class="maxheight">
                        <a href="images/big3.jpg" class="gall_item"><img src="images/page2_img2.jpg" alt=""></a>
                        <div class="gall_bot">
                            <div class="text1"><a href="#">Pratos principais</a></div>
                            <br>
                            <a href="{{route('registeraitem')}}" class="btn">Cadastrar</a></div>
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="gall_block">
                    <div class="maxheight">
                        <a href="images/bbig7.jpg" class="gall_item"><img src="images/page2_img7.jpg" alt=""></a>
                        <div class="gall_bot">
                            <div class="text1"><a href="#">Sobremesas</a></div>
                            <br>
                            <a href="{{route('registeraitem')}}" class="btn">Cadastrar</a></div>
                    </div>
                </div>
            </div>

            <div class="clear sep__1"></div>
            <div class="grid_4">
                <div class="gall_block">
                    <div class="maxheight">
                        <a href="images/bbig4.jpg" class="gall_item"><img src="images/page2_img4.jpg" alt=""></a>
                        <div class="gall_bot">
                            <div class="text1"><a href="#">Menus</a></div>
                            <br>
                            <a href="#" class="btn">Cadastrar</a></div>
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="gall_block">
                    <div class="maxheight">
                        <a href="images/bbig9.jpg" class="gall_item"><img src="images/page2_img9.jpg" alt=""></a>
                        <div class="gall_bot">
                            <div class="text1"><a href="#">Bebidas</a></div>
                            <br>
                            <a href="{{route('registeraitem')}}" class="btn">Cadastrar</a></div>
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

