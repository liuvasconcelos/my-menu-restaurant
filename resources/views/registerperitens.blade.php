@extends('template')

@section('principal')
<div class="row">
    <div class="container">
        <h2>Cadastro de insumos</h2>
        @if(Session::has('message'))
            <div class="alert alert-success">
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

        <form  id="createProductForm"   action="{{route('updateitem')}}" enctype="multipart/form-data" method="post">
            {{csrf_field()}}

            <h3 style="font-size: 20px;">Item: </h3>
            <div class="custom-control-input">
                <input name="name" id="name" type="text" style="width: 300px">
            </div>
            <h3 style="font-size: 20px; ">Preço: </h3>
            <div class="tmInput">
                <input name="price" id="price" type="number" placeHolder='R$00.00' style="width: 300px">
            </div>
            <div class="clear f_sep1"></div>
            <h3 style="font-size: 20px; ">Imagem do item: </h3>
            <div class="tmInput">
                <input name="image" id="image" type="file" style="width: 300px">
            </div>
            <div class="clear f_sep1"></div>
            <h3 style="font-size: 20px; ">Detalhes: </h3>
            <div class="tmTextarea">
                <textarea name="Message"  style="width: 300px; height: 40px;"></textarea>
            </div>
            <button value="Cadastrar" style="background-color: #4CAF50; color: white; width: 150px;">
                Cadastrar
            </button>
        </form>
    </div>
</div>
@endsection