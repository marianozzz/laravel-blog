@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.tags.create')}}">Nueva Etiqueta</a>

<h1>Mostrar Listado de Etiquetas</h1>
@stop

@section('content')

    @if (session('info'))
        <div class=" alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td>{{$tag->slug}}</td>
                        <td width="10px"> <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit',$tag)}}">Editar</a> </td>
                        <td width="10px">
                            <form action="{{route('admin.tags.destroy',$tag)}}" method="POST">

                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Elimnar</button>
                            
                            </form>
                        </td>
                    </tr>
                                       
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

