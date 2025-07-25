@@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1>Products</h1>
        @foreach($product as $products)
            <div class="bg-white shadow rounded-lg p-3">
                <h5 class="text-lg font-bold">{{$product->name}}</h5>
                <p class="text-gray-700">{{$product->description}}</p>
                <p class="text-gray-300 font-bold">{{$product->price}}</p>
                <a href="{{route('products.show',$product->id)}}">View Product</a>
            </div>
        @endforeach
    </div>

@endsection
