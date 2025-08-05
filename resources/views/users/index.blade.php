@extends('layouts.app')

@section('content')

    <div class="container mx-auto">
        <h1 class="text-center py-4">Orders controller</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <table class="min-w-full bg-white">
                <thead>
                <tr>
                    <th class="py-2 px-4 border-b">User ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="py-2 px-4 border-b">{{$user->id}}</td>
                        <td class="py-2 px-4 border-b">{{$user->name}}</td>
                        <td class="py-2 px-4 border-b">{{$user->email}}</td>
                        <td class="py-2 px-4 border-b">
                            @if(Auth::check() && Auth::user()->is_admin)
                                <a href="{{route('admin.users.edit',$user->id)}}">Edit User</a>
                                <form action="{{route('admin.users.destroy', $user->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete User</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

