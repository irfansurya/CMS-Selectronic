
@extends('layouts.main')

@section('container')

        <h2 class="mb-5 border-bottom pb-4">{{ $product->title }}</h2>

        <p>dari <a href="/authors/{{ $product->author->username }}" class="text-decoration-none">{{ $product->author->name  }}</a> kategori <a href="/categories/ $product->category->slug  }}" class="text-decoration-none"> {{ $product->category->nama }}</a></p>

        <h5>{{ $product->price }}</h5>

        {{ $product->body }}


    <a href="/product" class="d-block mt-3">Back to Products</a>
@endsection