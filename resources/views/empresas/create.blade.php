@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex justify-center items-center min-h-screen">
        <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold mb-6 text-center">Crear Empresa</h1>
            <form action="{{ route('empresas.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre</label>
                    <input type="text" class="form-control border border-gray-300 p-2 w-full rounded" id="nombre" name="nombre" required>
                    @error('nombre')
                        <div class="alert alert-danger text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="NIT" class="block text-gray-700 font-bold mb-2">NIT</label>
                    <input type="text" class="form-control border border-gray-300 p-2 w-full rounded" id="NIT" name="NIT" required>
                    @error('direccion')
                        <div class="alert alert-danger text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="telefono" class="block text-gray-700 font-bold mb-2">Teléfono</label>
                    <input type="text" class="form-control border border-gray-300 p-2 w-full rounded" id="telefono" name="telefono" required>
                    @error('telefono')
                        <div class="alert alert-danger text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" class="form-control border border-gray-300 p-2 w-full rounded" id="email" name="email" required>
                    @error('email')
                        <div class="alert alert-danger text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">Guardar</button>
            </form>
        </div>
    </div>
@endsection