@extends('layouts.app')

@section('title')
    {{ $brand->name }} | Cars
@endsection
@section('content')
    <div class="container-xl py-3">
        <div class="text-center">
            <img src="{{ asset('storage/images/brands/' . $brand->image) }}" alt="{{ $brand->name }}" class="img-fluid" width=350px">
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">
            @foreach($brand['products'] as $product)
                <div class="col py-3">
                    @include('app.product')
                </div>
            @endforeach
        </div>
    </div>
@endsection