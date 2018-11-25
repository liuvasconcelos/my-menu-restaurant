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
                <select name="entry" id="entry" class="tmSelect auto" data-class="tmSelect">
                    @foreach ($entries as $entry)
                     <option value="{{$entry->id}}">{{$entry->name}}</option>
                    @endforeach
                </select>
            </div>
            <h3 style="font-size: 20px;">Prato principal: </h3>
            <div class="custom-control-input">
                <select name="main" id="main" class="tmSelect auto" data-class="tmSelect">
                    @foreach ($mainCourses as $mainCourse)
                        <option value="{{$mainCourse->id}}">{{$mainCourse->name}}</option>
                    @endforeach
                </select>
            </div>
            <h3 style="font-size: 20px;">Sobremesa: </h3>
            <div class="custom-control-input">
                <select name="dessert" id="dessert" class="tmSelect auto" data-class="tmSelect">
                    @foreach ($desserts as $dessert)
                        <option value="{{$dessert->id}}">{{$dessert->name}}</option>
                    @endforeach
                </select>
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