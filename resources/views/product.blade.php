@extends('master')

@section('title', 'Товар')

@section('content')
    <div class="starter-template">
        <h1>King Pizza</h1>
        <h2>{{ $product }}</h2>
        <p>Цена: <b>120 грн.</b></p>
        <img src="">
        <p>Очень вкусная популярная пицца</p>
        <a class="btn btn-success" href="">Добавить в корзину</a>
    </div>
@endsection
