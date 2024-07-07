@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded my-6">
        <div class="flex gap-5 p-5 mx-auto justify-between items-center">
            <h1 class="text-4xl font-bold mb-4 text-center">Admin Data</h1>
            <div class="text-center mb-4">
                <a href="{{ route('admin.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">+ Add New Admin</a>
            </div>
        </div>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-200 border-b">ID</th>
                    <th class="py-2 px-4 bg-gray-200 border-b">Name</th>
                    <th class="py-2 px-4 bg-gray-200 border-b">Email</th>
                    <th class="py-2 px-4 bg-gray-200 border-b">Roles</th>
                    <th class="py-2 px-4 bg-gray-200 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($admins as $admin)
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b">{{ $admin->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $admin->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $admin->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $admin->role }}</td>
                        <td class="py-2 px-4 border-b text-center">
                            <a href="{{ route('admin.edit', $admin->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded"><i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
