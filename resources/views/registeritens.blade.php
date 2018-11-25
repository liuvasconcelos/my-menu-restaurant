@extends('template')

@section('principal')
    @if(Session::has('message'))
        <div class="alert alert-success" >
            {{Session::get('message')}}
        </div>
    @endif
    @if(count($errors) > 0)
        <div class="alert-danger" style="color: white; background-color: darkred">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>

    @endif
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
                    <a href="{{route('registermenu')}}" class="btn">Cadastrar</a></div>
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
@endsection

