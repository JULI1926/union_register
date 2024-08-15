@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-center text-2xl font-bold mb-4">Usuarios</h1>
        <div class="flex justify-center mb-4">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Nuevo Usuario</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Nombre</th>
                        <th class="py-2 px-4 border-b">Email</th>    
                        <th class="py-2 px-4 border-b">Permisos(Rol)</th>
                        <th class="py-2 px-4 border-b">Tipo de Documento</th>
                        <th class="py-2 px-4 border-b">Documento</th>
                        <th class="py-2 px-4 border-b">Telefono</th>
                        <th class="py-2 px-4 border-b">Fecha de Ingreso</th>
                        <th class="py-2 px-4 border-b">Empresa</th>
                        <th class="py-2 px-4 border-b">Cargo</th>
                        <th class="py-2 px-4 border-b">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if($users->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center py-4">No hay Usuarios Registrados.</td>
                        </tr>
                    @else
                        @foreach ($users as $user)
                            <tr class="hover:bg-gray-100">
                                <td class="py-2 px-4 border-b text-center">{{ $user->id }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $user->name }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $user->email }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $user->role }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $user->tipo_documento }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $user->documento }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $user->telefono }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $user->fecha_ingreso }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $user->empresa }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $user->cargo }}</td>   
                                
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
