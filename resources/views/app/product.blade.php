<div>
    <img src="{{ $product->image ? asset('storage/images/products/') . $product->image : asset('storage/images/product2.png') }}" alt="" class="img-fluid img-thumbnail">
</div>
<div class="h5 text-center pt-1">
    <a href="{{ route('product.show', $product->slug) }}" class="text-decoration-none text-black">
        {{ $product->name }}
    </a>
</div>
<div class="d-block d-md-flex justify-content-between align-items-center pt-1">
    <div class="text-center">
        <i class=" text-danger bi-box"></i>
        {{ $product->stock }}
    </div>
    <div class=" text-center text-lg-start text-primary">
        {{ $product->price }} <small>TMT</small>
    </div>
</div>
