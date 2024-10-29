@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-full bg-gray-100">
    <div class="flex justify-start mb-4">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver Atrás</a>
    </div>
    <h1 class="text-center text-2xl font-bold mb-4">Empresas</h1>
    <div class="flex justify-center mb-4">
        <a href="{{ route('empresas.create') }}" class="btn btn-primary">Nueva Empresa</a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nombre</th>
                    <th class="py-2 px-4 border-b">NIT</th>
                    <th class="py-2 px-4 border-b">Teléfono</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if($empresas->isEmpty())
                <tr>
                    <td colspan="6" class="text-center py-4">No hay empresas registradas.</td>
                </tr>
                @else
                @foreach ($empresas as $empresa)
                <tr class="hover:bg-gray-100">
                    <td class="py-2 px-4 border-b text-center">{{ $empresa->id }}</td>
                    <td class="py-2 px-4 border-b text-center">{{ $empresa->nombre }}</td>
                    <td class="py-2 px-4 border-b text-center">{{ $empresa->NIT }}</td>
                    <td class="py-2 px-4 border-b text-center">{{ $empresa->telefono }}</td>
                    <td class="py-2 px-4 border-b  text-center">{{ $empresa->email }}</td>
                    <td class="py-2 px-4 border-b  text-center">
                        <a href="" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded w-24 inline-block text-center">Ver</a>
                        <a href="" class="bg-yellow-500 hover:bg-yellow-700 text-black font-bold py-2 px-4 rounded w-24 inline-block text-center">Editar</a>
                        <form action="" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-black font-bold py-2 px-4 rounded w-24 inline-block text-center">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection