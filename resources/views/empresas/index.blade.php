@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Empresas</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if($empresas->isEmpty())
                    <tr>
                        <td colspan="6">No hay empresas registradas.</td>
                    </tr>
                @else
                    @foreach ($empresas as $empresa)
                        <tr>
                            <td>{{ $empresa->id }}</td>
                            <td>{{ $empresa->nombre }}</td>
                            <td>{{ $empresa->direccion }}</td>
                            <td>{{ $empresa->telefono }}</td>
                            <td>{{ $empresa->email }}</td>
                            <td>
                                <a href="{{ route('empresas.show', $empresa->id) }}" class="btn btn-info">Ver</a>
                                <a href="{{ route('empresas.edit', $empresa->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('empresas.destroy', $empresa->id) }}" method="POST" style="display:inline;">
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
@endsection