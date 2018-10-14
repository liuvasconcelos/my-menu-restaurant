@extends('template')

@section('principal')
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

            <em>Data: </em>
            <label >
                <input type="date" id="date" name="date" >
            </label>

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

            </div>

            <div class="fl1 ">
                <em>Mesa: </em>
                <select name="table" id="table" class="tmSelect auto" data-class="tmSelect tmSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                </select>

            </div>


            <div class="tmTextarea">
                <textarea name="obs" placeHolder="Observações:"></textarea>
            </div>
            <div class="ta__right">
                <button value="Reservar">
                    Reservar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
