@extends('layouts.app')

@section('titulo', 'Categorias')

@section('content')

<!DOCTYPE html>
<html>
    <div id="content">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 class="m-0"><strong>Lista de Categorias</strong></h4>
                <a class="d-flex justify-content-end" href="{{ URL::to('categories/create') }}">
                    <button type="button" class="btn btn-md btn-primary d-flex justify-content-end">Agregar Categoria</button>
                </a>
            </div>
        
            <div class="card-body">
                
                <table class = "table table-striped table-hover table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th class="align-middle" scope="row">{{$category->id}}</th>
                                <td class="align-middle">{{$category->name}}</td>
                                <td class="align-middle">
                                    <div class="btn-group">
                                        <button class="btn btn-warning" type="button"
                                            title="Editar"
                                            onclick="window.location='{{ url('categories/edit/'.$category->id) }}';">
                                                <i class="fas fa-pencil-alt"></i> Editar
                                        </button>
                                        <form class="btn-group" action="{{ url('categories/'.$category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit" title="Borrar" onclick="
                                            return confirm('¿Estás seguro? ¡Esta acción eliminará a esta categoria!')">
                                                <i class="fas fa-trash-alt"></i> Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</html>

@endsection