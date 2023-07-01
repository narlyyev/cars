@extends('layouts.app')

@section('title')
    {{ $category->name }} | Cars
@endsection
@section('content')
    <div class="container-xl py-3">
        <div class="h2 text-center text-secondary">
            {{ $category->name }}
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">
            @foreach($category['products'] as $product)
               <div class="col py-3">
                   @include('app.product')
               </div>
            @endforeach
        </div>

    </div>
@endsection