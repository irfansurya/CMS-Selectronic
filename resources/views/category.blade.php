@extends('layouts.main')

@section('container')

<h1 class="mb-5">Product Category : {{ $category }}</h1>

@foreach ($products as $product)
<article class="mb-5">
    <h2>
        <a href="/products/{{ $product->slug }}">{{ $product->title }}</a>
    </h2>
    <h5>Rp. {{ $product->price }}</h5>
    <p>{{ $product->excerpt }}</p>
</article>

@endforeach

@endsection