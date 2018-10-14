<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Menu Restaurant</title>
    <meta charset="utf-8">
</head>

<body class="page1" id="top">
<center>
    <section class="content" style="background-color: white;">

        <div class="container">
            <div class="row">
                <div class="grid_4">
                    <div class="banner">
                        <div class="gall_block">
                            <img src="images/page1_img1.jpg" alt="">
                            <div class="bann_capt ">
                                <div class="maxheight">
                                    <form action="{{route('login')}}" method="post">
                                        {{csrf_field()}}
                                        <a>Login: </a>
                                        <div class="tmInputLogin">
                                            <input type="text" name="login" id="login"
                                                   style="background-color: #aad4b3">
                                        </div>
                                        <a>Senha: </a>
                                        <div class="tmInputLogin">
                                            <input type="password" name="senha" id="senha"
                                                   style="background-color: #aad4b3">
                                        </div>
                                        <div class="clear f_sep1"></div>
                                        <button value="Entrar">
                                            Entrar
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</center>


{{--<script type="text/javascript" language="javascript">--}}
    {{--function valida_form() {--}}

        {{--if (document.getElementById("login").value.length < 3) {--}}
            {{--alert('Por favor, preencha o campo login');--}}
            {{--document.getElementById("login").focus();--}}
            {{--return false--}}
        {{--}--}}

        {{--if (document.getElementById("senha").value.length < 3) {--}}
            {{--alert('Por favor, preencha o campo senha');--}}
            {{--document.getElementById("senha").focus();--}}
            {{--return false--}}
        {{--}--}}
    {{--}--}}
{{--</script>--}}

</body>
</html>

