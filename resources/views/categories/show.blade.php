@extends('layouts.app')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm border rounded-lg text-center">
                    <img
                        src="{{ $category->image_url }}"
                        class="card-img-top rounded-3"
                        alt="{{ $category->name }}"
                        style="height: 150px; object-fit: cover;"
                    >
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $category->name }}</h5>
                        <p class="card-text text-muted">{{ $category->description }}</p>
                        <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary btn-sm">View All
                            Categories</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

