@extends('master')

@section('title', 'Все категории')

@section('content')
    <div class="starter-template">
        @foreach ($categories as $category)
<div class="panel">
            <a href="{{ route('category', $category->description) }}">
                <img src="">
                <h2>{{ $category->title }}</h2>
            </a>
            <p>
                В этом разделе вы найдёте самые популярные пиццы по сниженным ценам!
            </p>
        </div>
        @endforeach
    </div>
@endsection

