@php use App\Models\Category; @endphp
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
</head>

<div class="container mx-auto">
    <h1 class="text-center py-4">Edit User</h1>
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-4">
            <label for="name" class="black text-gray-700">Name</label>
            <input type="text" name="name" id="name" value="{{$user->name}}" class="w-full border rounded p-2">
        </div>
        <div class="mb-4">
            <label for="email" class="black text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{$user->email}}" class="w-full border rounded p-2">
        </div>


        <label for="status" class="black text-gray-700">Admin  Status</label>
        <select name="is_admin" id="is_admin" class="w-full border rounded p-2">
            <option value="1"{{$user->is_admin ? 'selected': '' }}>Admin</option>
            <option value="0"{{$user->is_admin ? 'selected': '' }}>Regular User</option>
        </select>

        <button type="submit">Update User</button>
    </form>
</div>
