@extends('layouts.app')

@section('content')
@foreach ($tovars as $o)
<div class="card h-100" style="width: 18rem;">
    <img class="card-img-top h-100" src="{{ $o->img }}" alt="cardimg">
    <div class="card-body">
        <h5 class="card-title">{{ $o->name }} </h5>
        <p class="card-text">Цена: {{ $o->price }}руб</p>
        @auth<a href="#" class="btn btn-primary">Купить</a>@endauth
    </div>

</div>
@endforeach




@endsection

