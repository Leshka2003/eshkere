@extends('layouts.app')

@section('content')
    @foreach ($tovars as $o)
    <div>
        {{$o->name}} <br>
    <img src="{{$o->surname}}" alt="">     <br>
        {{$o->patranomic}}
    </div>
    @auth
    <button>купить</button>
    @endauth
    @endforeach
    @endsection
