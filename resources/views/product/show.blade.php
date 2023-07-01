@extends('layouts.app')

@section('title')
    {{ $product->name }} | Cars
@endsection
@section('content')
    <div class="container-xl py-4">
        <div class="row">
            <div class="h5 text-danger pb-1">
                {{ $product['category']->name }}
            </div>
            <div class="col-12 col-lg-5">
                <div>
                    <img src="{{ $product->image ? asset('storage/images/products/') . $product->image : asset('storage/images/product2.png') }}" alt="" class="img-fluid rounded-3">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="h1 text-primary">
                    {{ $product->name }}
                </div>
                <div class="pt-3">
                    <img src="{{ asset('storage/images/brands/' . $product['brand']->image) }}" alt="{{ $product['brand']->name }}" class="img-fluid" width=100px">
                </div>
                <div class="h5 pt-3">
                    {{ $product->price }} <small>TMT</small>
                </div>
                <div class="d-flex">
                    <div class="h5 pt-3 pe-3">
                        <i class="bi-eye text-primary"></i> {{ $product->viewed }}
                    </div>
                    <div class="h5 pt-3">
                        <i class="bi-hand-thumbs-up text-danger"></i> {{ $product->liked }}
                    </div>
                </div>
                <div class="h5 pt-3">
                    <i class="bi-box text-danger"></i> {{ $product->stock }}
                </div>
                <div class="h6 fw-normal pt-3">
                    {{ $product->description }}
                </div>
            </div>
        </div>
    </div>
@endsection