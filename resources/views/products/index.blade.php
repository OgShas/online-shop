@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-center py-4 fs-2">Products</h1>
        <div class="row">
            @foreach($products as $product)
                <div class="col-12 col-md-4 mb-4 text-center">
                    <div class="bg-white shadow rounded-lg p-3 mb-4">
                        <img class="w-100 rounded-3" style="height: 150px; object-fit: cover;"
                             src="{{$product->image_url}}"
                             alt="{{$product->name}}">
                        <h5 class="text-lg font-bold">{{ $product->title }}</h5>
                        <p class="text-gray-700">{{ $product->description }}</p>
                        <p class="text-gray-300 font-bold">{{ $product->price }}</p>
                        <a href="{{ route('products.show', $product->id) }}">View Product</a>
                    </div>
                    @if(Auth::check() && \Illuminate\Support\Facades\Auth::user()->is_admin)
                        <a href="{{route('admin.products.edit',$product->id)}}">Edit Product</a>
                        <form action="{{route('admin.products.destroy', $product->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete Product</button>
                        </form>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection

