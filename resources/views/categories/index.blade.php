@extends('layouts.app')

@section('content')
    <h1 class="text-center py-4 fs-2">Categories</h1>
    <div class="container my-5">
        <div class="row">
            @foreach($categories as $category)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card shadow-sm rounded-lg h-100 text-center">
                        <img
                            src="{{ $category->image_url }}"
                            class="card-img-top rounded-3"
                            alt="{{ $category->name }}"
                            style="height: 150px; object-fit: cover;"
                        >
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title fw-bold">{{ $category->name }}</h5>
                                <p class="card-text text-muted">{{ $category->description }}</p>
                                <a href="{{route('categories.show',$category->id)}}" class="btn btn-primary mt-auto">
                                    View Categories
                                </a>
                            </div>

                            @if(Auth::check() && \Illuminate\Support\Facades\Auth::user()->is_admin)
                                <div class="mt-3">
                                    <a href="{{ route('admin.category.edit', $category->id) }}"
                                       class="btn btn-sm btn-outline-primary me-2">Edit Category</a>
                                    <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Are you sure?')">Delete Category
                                        </button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

