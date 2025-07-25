<div class="container mx-auto">
    <div class="bg-white shadow rounded-lg p-3 mb-4">
        <img class="w-full h-48 object-cover rounded-3"
             src="{{$category->image_url}}"
             alt="{{$category->name}}"
        >
        <h5 class="text-lg font-bold">{{ $category->name }}</h5>
        <p class="text-gray-700">{{ $category->description }}</p>
        <a href="{{ route('categories.index') }}">View All Category</a>
    </div>
</div>
