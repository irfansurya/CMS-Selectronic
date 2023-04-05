

@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>

@if ($products->count())
    <div class="card mb-3">
        <img src="img/bg.jpg" width="1200" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/products/{{ $products[0]->slug }}"></a>{{ $products[0]->title }}</h3>
            <p>
                <small class="text-muted">dari <a href="/authors/{{ $products[0]->author->username }} " class="text-decoration-none">{{  $products[0]->author->name  }}</a> kategori <a href="/categories/ $products[0]->category->slug  }}" 
                class="text-decoration-none"> {{ $products[0]->category->nama }}</a> 3 menit yang lalu
                </small>
            </p>
            <p class="card-text">{{ $products[0]->excerpt }}</p>

            <a href="/products/{{ $products[0]->slug }}" class="text-decoration-none btn btn-primary">Buka produk</a>
            
        </div>
    </div>
@else
    <p class="text-center fs-4">no product found</p>
@endif

<div class="container">
    <div class="row">
        @foreach ($products->skip(1) as $product)
        <div class="col-md-4">
            <div class="card" >
                <div class="position-absolute bg-dark p-3 text-white"><a href="/categories/{{ $product->category->slug }}" class="text-white text-decoration-none">{{ $product->category->nama }}</a></div>
                <img src="img/bg.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p>
                        <small class="text-muted">dari <a href="/authors/{{ $product->author->username }} " class="text-decoration-none">{{  $product->author->name  }}</a>  3 menit yang lalu
                        </small>
                    </p>
                    <p class="card-text">{{ $product->excerpt }}</p>
                    <a href="/products/{{ $product->slug }}" class="btn btn-primary">Buka produk</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@foreach ($products->skip(1) as $product)
<article class="mb-5 border-bottom pb-4">
    <h2>
        <a href="/products/{{ $product->slug }}" class="text-decoration-none">{{ $product->title }}</a>
    </h2>

    <p>dari <a href="/authors/{{ $product->author->username }} " class="text-decoration-none">{{  $product->author->name  }}</a> kategori <a href="/categories/ $product->category->slug  }}" class="text-decoration-none"> {{ $product->category->nama }}</a></p>

    <h5>Rp. {{ $product->price }}</h5>
    <p>{{ $product->excerpt }}</p>

    <a href="/products/{{ $product->slug }}" class="text-decoration-none">Buka produk...</a>
</article>

@endforeach

@endsection