@extends('template')

@section('principal')
<div class="row">
    <div class="grid_4">
        <h2>Cadastro de insumos</h2>
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
        <form id="createProductForm"   action="{{route('updateitem')}}" enctype="multipart/form-data" method="post">
            {{csrf_field()}}
            <em>Item: </em>
            <div class="tmInput">
                <input name="name" id="name" type="text" >
            </div>
            <em>Preço:</em>
            <div class="tmInput">
                <input name="price" id="price" type="number" placeHolder='R$00.00'>
            </div>
            <div class="clear f_sep1"></div>
            <em>Imagem do item:</em>
            <div class="tmInput">
                <input name="image" id="image" type="file">
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
@endsection