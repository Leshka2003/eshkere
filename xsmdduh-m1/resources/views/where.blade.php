@extends('layouts.app')

@section('content')
<h1 class="text-center">Где нас найти ?</h1>
<div class="container">
<div class="where__section">
    <div class="where__img"><img src="/public/img/map.jpg" alt=""></div>
    <div class="where__text">
        Адрес:Комарова 13 <br>
        Email:sfhrt@mail.ru <br>
        <a href="tel:89235406218">89235406218</a>
    </div>
    </div>
</div>

<style>
    .where__section {
        display: flex;
        justify-content: space-between;
      
    }
    img {
        width:50%;
    }
</style>


@endsection
