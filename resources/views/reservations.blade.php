@extends('template')

@section('principal')
    @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
    @endif
    @if(count($errors) > 0)
        <div class="alert-danger"  style="color: white; background-color: darkred">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>

    @endif
<div class="row">
    <div class="grid_4">
        <h2>Reserva de mesas</h2>

        <form id="bookingForm" action="{{route('updateTables')}}" method="post">
            {{csrf_field()}}
            <h3 style="font-size: 20px; margin-top: 10px">Nome do Cliente: </h3>
            <div class="tmInput">
                <input name="name" id="name" type="text">
            </div>
            <h3 style="font-size: 20px; margin-top: 10px">Telefone do Cliente: </h3>
            <div class="tmInput">
                <input name="phone" id="phone" type="text">
            </div>
            <h3 style="font-size: 20px; margin-top: 10px">Data: </h3>
            <label >
                <input type="date" id="date" name="date" >
            </label>

            <div class="fl1 ">
                <h3 style="font-size: 20px; margin-top: 10px">Pessoas: </h3>
                <select name="people" id="people" class="tmSelect auto" data-class="tmSelect tmSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>

            </div>

            <div class="fl1 ">
                <h3 style="font-size: 20px; margin-top: 10px">Mesa: </h3>
                <select name="table" id="table" class="tmSelect auto" data-class="tmSelect tmSelect2">
                    @foreach ($tables as $table)
                        <option>{{$table->id}}</option>
                    @endforeach
                </select>

            </div>


            <div class="tmTextarea" style="margin-top: 10px">
                <textarea name="obs" placeHolder="Observações:"></textarea>
            </div>

            <button value="Reservar" style="background-color: #4CAF50; color: white; width: 150px;">
                Reservar
            </button>

        </form>
    </div>
</div>
@endsection
