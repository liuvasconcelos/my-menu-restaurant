<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reservation</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="stylesheet" href="booking/css/booking.css">
    <link rel="stylesheet" href="css/stuck.css">
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
                                <li class="current"><a href="{{route('reservation')}}">Reservas</a></li>
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
                <h2>Reserva de mesas</h2>
                <form id="bookingForm" action="{{route('updateTables')}}" method="post">
                    {{csrf_field()}}
                    <em>Nome do Cliente: </em>
                    <div class="tmInput">
                        <input name="name" id="name" type="text">
                    </div>
                    <em>Telefone do Cliente: </em>
                    <div class="tmInput">
                        <input name="phone" id="phone" type="text">
                    </div>
                    <div class="clear f_sep1"></div>
                    <em>Data: </em>
                    <label >
                        <input type="date" id="date" name="Date" >
                    </label>
                    <div class="clear"></div>
                    <div class="fl1 ">
                        <em>Pessoas: </em>
                        <select name="people" id="people" class="tmSelect auto" data-class="tmSelect tmSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select>
                        <div class="clear height1"></div>
                    </div>
                    <div class="clear"></div>

                    <div class="tmTextarea">
                        <textarea name="Message" placeHolder="Observações:"></textarea>
                    </div>
                    <div class="ta__right">
                        <button value="Reservar">
                            Reservar
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
            {{--alert('Por favor, preencha o nome do cliente.');--}}
            {{--document.getElementById("name").focus();--}}
            {{--return false--}}
        {{--}--}}

        {{--if (document.getElementById("phone").value.length < 11) {--}}
            {{--alert('Por favor, preencha o telefone do cliente');--}}
            {{--document.getElementById("phone").focus();--}}
            {{--return false--}}
        {{--}--}}

        {{--if (document.getElementById("date").value.length < 1) {--}}
            {{--alert('Por favor, selecione uma data para reserva');--}}
            {{--document.getElementById("date").focus();--}}
            {{--return false--}}
        {{--}--}}

        {{--if (document.getElementById("people").value.length < 1) {--}}
            {{--alert('Por favor, selecione a quantidade de pessoas da reserva');--}}
            {{--document.getElementById("people").focus();--}}
            {{--return false--}}
        {{--}--}}

    {{--}--}}
{{--</script>--}}
</body>
</html>

