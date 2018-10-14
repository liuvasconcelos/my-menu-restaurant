<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cadastro</title>
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

<section class="content">
    <div class="container">
        <div class="row">
            <div class="grid_4">
                <h2>Cadastro de insumos</h2>
                <form id="createProductForm"   action="{{route('updateitem')}}" method="post">
                    {{csrf_field()}}
                    <em>Item: </em>
                    <div class="tmInput">
                        <input name="name" id="name" type="text" >
                    </div>
                    <em>Preço:</em>
                    <div class="tmInput">
                        <input name="preco" id="preco" type="text" placeHolder='R$00.00'>
                    </div>
                    <div class="clear f_sep1"></div>
                    <em>Detalhes:</em>
                    <div class="tmTextarea">
                        <textarea name="Message" ></textarea>
                    </div>
                    <div class="ta__right">
                        <button value="Cadastrar">
                            Cadastrar
                        </button>
                    </div>
                </form>
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
{{--<script type="text/javascript" language="javascript">--}}
    {{--function valida_form() {--}}

        {{--if (document.getElementById("name").value.length < 3) {--}}
            {{--alert('Por favor, preencha o nome do item a ser cadastrado.');--}}
            {{--document.getElementById("name").focus();--}}
            {{--return false--}}
        {{--}--}}

        {{--if (document.getElementById("preco").value.length < 1) {--}}
            {{--alert('Por favor, preencha o preço do item');--}}
            {{--document.getElementById("preco").focus();--}}
            {{--return false--}}
        {{--}--}}

    {{--}--}}
{{--</script>--}}
</body>
</html>

