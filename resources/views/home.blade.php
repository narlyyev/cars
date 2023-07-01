@extends('layouts.app')

@section('title')
    Cars
@endsection
@section('content')
    <div class="container-xl py-3">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">
            @foreach($products as $product)
                <div class="col py-4">
                    @include('app.product')
                </div>
            @endforeach
        </div>
        <div class="py-3">
            {{ $products->links() }}
        </div>
    </div>
@endsection