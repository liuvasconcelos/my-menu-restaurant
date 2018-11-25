@extends('template')

@section('principal')
<div class="row">
    <div class="container">
        <h2>Cadastro de menus</h2>
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

        <form  id="createMenuForm"   action="{{route('addmenu')}}" enctype="multipart/form-data" method="post">
            {{csrf_field()}}

            <h3 style="font-size: 20px;">Entrada: </h3>
            <div class="custom-control-input">
                <select name="table" id="table" class="tmSelect auto" data-class="tmSelect">
                    <option>Entrada -1</option>
                    <option>Entrada -2</option>
                    <option>Entrada -3</option>
                    <option>Entrada -4</option>
                </select>
            </div>
            <h3 style="font-size: 20px;">Prato principal: </h3>
            <div class="custom-control-input">
                <input name="main" id="main" type="text" style="width: 300px">
            </div>
            <h3 style="font-size: 20px;">Sobremesa: </h3>
            <div class="custom-control-input">
                <input name="dessert" id="dessert" type="text" style="width: 300px">
            </div>
            <h3 style="font-size: 20px; ">Valor: </h3>
            <div class="tmInput">
                <input name="price" id="price" type="number" placeHolder='R$00.00' style="width: 300px">
            </div>
            <button value="Cadastrar" style="background-color: #4CAF50; color: white; width: 150px;">
                Cadastrar
            </button>
        </form>
    </div>
</div>
@endsection