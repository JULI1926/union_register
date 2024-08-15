@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
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
                                    <a href="" class="btn btn-info">Ver</a>
                                    <a href="" class="btn btn-warning">Editar</a>
                                    <form action="" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
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
