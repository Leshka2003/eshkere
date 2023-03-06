@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{-- сортировка --}}
            <a href="{{ url('/catalog/sort') }}/year/desc/" class="btn btn-light btn-lg active" role="button"
                aria-pressed="true">По году</a>
            <a href="{{ url('/catalog/sort') }}/name/asc/" class="btn btn-primary btn-lg active" role="button"
                aria-pressed="true">По наименованию</a>
            <a href="{{ url('/catalog/sort') }}/price/desc/" class="btn btn-danger btn-lg active" role="button"
                aria-pressed="true">По цене</a>

            {{-- фильтр --}}
            <div class="dropdown">
                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    Фильтры
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    @foreach($cat as $koshka)
                        <li><a class="dropdown-item" href="{{url('/catalog/filter')}}/{{$koshka->id}}">{{$koshka->name}}</a>
                        </li>
                    @endforeach
                    <li><a class="dropdown-item" href="{{url('/catalog')}}">сборосить фильтр</a></li>
                </ul>
            </div>
            {{-- карточка товара --}}
            @foreach ($prod as $o)
                <div class="col-md-3 pb-5">
                    <div class="card h-100" style="width: 18rem;">
                        <img class="card-img-top h-100" src="{{ $o->img }}" alt="cardimg">
                        <div class="card-body">
                            <h5 class="card-title">{{ $o->name }} </h5>
                            <p class="card-text">Цена: {{ $o->price }}руб</p>
                            @auth<a href="#" class="btn btn-primary">Купить</a>@endauth
                        </div>
                        <a href="{{url('catalog/tovars' )}}/{{$o->id}}" class="stretched-link"></a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    </div>
@endsection
