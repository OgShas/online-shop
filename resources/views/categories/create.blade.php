@extends('layouts.app')

@section('content')

    <div class="container mx-auto">
        <h1 class="text-center py-4">Add Category</h1>
        <form action="{{route('admin.category.store')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="text-gray-400">Category Name</label>
                <input type="text" name="name" id="name" class="w-full border rounded-3">
            </div>
            <div class="mb-4">
                <label for="description" class="text-gray-400">Product Description</label>
                <textarea name="description" id="description" class="w-full border rounded-3"></textarea>
            </div>
            <div class="mb-4">
                <label for="image_url" class="text-gray-400">Image Url</label>
                <input type="text" name="image_url" id="image_url" class="w-full border rounded-3">
            </div>
            <button type="submit">Create</button>
        </form>
    </div>
@endsection
