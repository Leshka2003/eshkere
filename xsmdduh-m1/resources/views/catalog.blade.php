@extends('layouts.app')

@section('content')
    @foreach ($tovars as $o)
    <div>
        {{$o->name}}
        {{$o->surname}}
        {{$o->patranomic}}
    </div>
    @endforeach
    @endsection
