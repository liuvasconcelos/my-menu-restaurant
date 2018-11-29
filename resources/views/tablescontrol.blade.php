@extends('template')

@section('principal')
    @if(Session::has('message'))
        <div class="alert alert-success" style="color: black; background-color: greenyellow">
            {{Session::get('message')}}
        </div>
    @endif
    @if(Session::has('alert'))
        <div class="alert alert-success" style="color: black; background-color: yellow">
            {{Session::get('alert')}}
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
        <div class="grid_7" style="min-height: 400px">
            @foreach ($tables as $table)
                <a href="{{route('addorder', $table->id)}}" class="{{$table->style}}" style="color: black">Mesa {{$table->id}}</a>
            @endforeach

        </div>
    </div>
@endsection
