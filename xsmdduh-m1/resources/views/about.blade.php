@extends('layouts.app')

@section('content')
<style>
    </style>
    <div class="container">
        <div class="card">
            <!-- карточка с лого и девизом-->
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <img src="../public/img/logo.png" alt="logo"> <!-- лого -->
                    </div>
                    <div class="col-8">
                        <h1>Кто не падает тот не знает laravel 
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($tovars as $pp)
                @if($loop->first)
                    <div class="carousel-item active">
                        @else
                    <div class="carousel-item">
                        @endif
                        <img src="{{ $pp->surname }}" class="d-block w-100 carousel-img" alt="tovar">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>{{ $pp->name }}</h1>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection