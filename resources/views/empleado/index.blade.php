@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('mensaje') }}
    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
    
    @endif

<a href="{{ url('empleado/create') }}" class="btn btn-success">Registrar Nuevo Empleado</a>
<br><br>
<table class="table table-light">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado -> id }}</td>
            <td>
                <img class="img-fluid img-thumbnail" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="100">
            </td>
            <td>{{ $empleado -> Nombre }}</td>
            <td>{{ $empleado -> ApellidoPaterno }}</td>
            <td>{{ $empleado -> ApellidoMaterno }}</td>
            <td>{{ $empleado -> Correo }}</td>
            <td>
                <a href="{{ url('/empleado/'.$empleado -> id.'/edit') }}" class="btn btn-warning">
                Editar
                </a>
                 |
                <form action="{{ url('/empleado/'.$empleado -> id) }}" class="d-inline" method="post">
                @csrf
                {{ method_field('DELETE') }}     
                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Esta seguro de borrar el registro?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $empleados->links() !!}

</div>
@endsection