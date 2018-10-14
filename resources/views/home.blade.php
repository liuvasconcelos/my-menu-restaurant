@extends('template')

@section('principal')
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
@endsection



