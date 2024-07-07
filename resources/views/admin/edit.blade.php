@extends('layouts.admin')

@section('content')
<div class="container w-full p-6">
    <div class="bg-white mx-auto shadow-md rounded my-6 py-6 px-8 max-w-[60%]">
        <h1 class="text-2xl font-bold mb-4 text-center">Edit Admin</h1>
        <form action="{{ route('admin.update', $admin->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" name="name" id="name" value="{{ $admin->name }}" class="form-input bg-blue-200 rounded-md border-gray-300 w-full px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" value="{{ $admin->email }}" class="form-input bg-blue-200 rounded-md border-gray-300 w-full px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" name="password" id="password" class="form-input bg-blue-200 rounded-md border-gray-300 w-full px-3 py-2" >
                <p class="text-xs text-gray-500">Leave blank to keep current password.</p>
            </div>
            <div class="mb-4">
                <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Role</label>
                <select name="role" id="role" class="form-select bg-blue-200 rounded-md border-gray-300 w-full px-3 py-2" required>
                    <option value="USER" {{ $admin->role == 'USER' ? 'selected' : '' }}>USER</option>
                    <option value="ADMIN" {{ $admin->role == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-green-500 hoverbg-green-700 text-white font-bold py-2 px-4 rounded">Save Change(s)</button>
            </div>
        </form>
    </div>
</div>
@endsection
