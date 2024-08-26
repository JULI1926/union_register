@extends('layouts.app')

@section('content')
<div class="container mx-auto flex justify-center items-center min-h-screen">
    <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Crear Usuario Administrador</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nombre</label>
                <input type="text" class="form-control border border-gray-300 p-2 w-full rounded" id="name" name="name" required>
                @error('name')
                <div class="alert alert-danger text-red-500 mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="NIT" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" class="form-control border border-gray-300 p-2 w-full rounded" id="email" name="email" required>
                @error('email')
                <div class="alert alert-danger text-red-500 mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" class="form-control border border-gray-300 p-2 w-full rounded" id="password" name="password" required>
                @error('password')
                <div class="alert alert-danger text-red-500 mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Confirm Password</label>
                <input type="password" class="form-control border border-gray-300 p-2 w-full rounded" id="password_confirmation" name="password_confirmation" required>
                @error('password_confirmation')
                <div class="alert alert-danger text-red-500 mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="hidden" id="role" name="role" value="admin">
                @error('role')
                <div class="alert alert-danger text-red-500 mt-2">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">Guardar</button>
        </form>
    </div>
</div>
@endsection