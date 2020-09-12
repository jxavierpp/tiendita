@extends('layouts.app')

@section('titulo', 'Productos')

@section('content')

<!DOCTYPE html>
<html>
    <div id="content">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 class="m-0"><strong>Lista de Productos</strong></h4>
                <a class="d-flex justify-content-end" href="{{ URL::to('products/create') }}">
                    <button type="button" class="btn btn-md btn-primary d-flex justify-content-end">Agregar Producto</button>
                </a>
            </div>
        
            <div class="card-body">
                
                <table class = "table table-striped table-hover table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Inventario</th>
                            <th scope="col">Costo</th>
                            <th scope="col">Disponibilidad</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th class="align-middle" scope="row">{{ $product->id }}</th>
                                <td class="align-middle">{{ $product->name }}</td>
                                <td class="align-middle">{{ $product->inventory }}</td>
                                <td class="align-middle">{{ $product->cost }} MXN</td>
                                <td class="align-middle">
                                    @if ($product->availability)
                                        Disponible
                                    @else
                                        No Disponible
                                    @endif    
                                </td>
                                <td class="align-middle">
                                    <ul class="list-group">
                                        @if ($product->category)
                                            <li class="list-item">
                                                {{ $product->category->name }}
                                            </li>
                                        @elseif (!$product->category)
                                            <li class="list-item">
                                                Sin categoria
                                            </li>
                                        @endif
                                    </ul>
                                </td>
                                <td class="align-middle">
                                    <div class="btn-group">
                                        <button class="btn btn-warning" type="button"
                                            title="Editar"
                                            onclick="window.location='{{ url('products/edit/'.$product->id) }}';">
                                                <i class="fas fa-pencil-alt"></i> Editar
                                        </button>
                                        <form class="btn-group" action="{{ url('products/'.$product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit" title="Borrar" onclick="
                                            return confirm('¿Estás seguro? ¡Esta acción eliminará a este producto!')">
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