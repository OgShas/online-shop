@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm border rounded-lg text-center">
                    <img
                        src="{{ $product->image_url }}"
                        class="card-img-top rounded-3"
                        alt="{{ $product->name }}"
                        style="height: 150px; object-fit: cover;"
                    >
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $product->name }}</h5>
                        <p class="card-text text-muted">{{ $product->description }}</p>
                        <p class="card-text fw-bold text-primary fs-5">{{ $product->price }}</p>

                        @if(Auth::check() && !Auth::user()->is_admin)
                            <form action="{{route('cart.store')}}" method="POST" class="mb-3">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <div class="input-group justify-content-center"
                                     style="max-width: 120px; margin: 0 auto;">
                                    <input type="number" name="quantity" value="1" min="1"
                                           class="form-control text-center" aria-label="Quantity">
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </div>
                            </form>
                        @endif

                        <a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn-sm">View All
                            Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
