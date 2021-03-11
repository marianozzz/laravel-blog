@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.roles.create')}}">Nuevo Rol</a>

<h1>Lista de roles</h1>
@stop

@section('content')

<div class="card">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Rol</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $rol)
                <tr>
                    <td>{{$rol->id}}</td>
                    <td>{{$rol->name}}</td>
                    <td  width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.roles.edit',$rol)}}">Editar</a></td>
                    <td width="10px">
                        <form action="{{route('admin.roles.destroy', $rol)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop

