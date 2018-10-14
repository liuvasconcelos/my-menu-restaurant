<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Menu Restaurant</title>
    <meta charset="utf-8">
</head>

<body class="page1" id="top">
<center>
    @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
    @endif
    @if(count($errors) > 0)
        <div class="alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>

    @endif
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
                                            <input type="password" name="password" id="password"
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
</body>
</html>

