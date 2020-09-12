@extends('layouts.app')

@section('content')
    <div id="content">
        <div class="card">
            <div class="card-header title">
                <h4><strong>Editar Producto</strong></h4>
            </div>

            <div class="card-body">
                <form action={{ url('/products/'.$product->id) }} method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cost" class="col-sm-2 col-form-label">Costo:</label>
                        <div class="col-sm-3">
                            <input type="number" step="0.01" class="form-control" id="cost" name="cost" value="{{ $product->cost }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inventory" class="col-sm-2 col-form-label">Inventario:</label>
                        <div class="col-sm-3">
                            <input type="number"  class="form-control" id="inventory" name="inventory" value="{{ $product->inventory }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="availability" class="col-sm-2 col-form-label">Disponibilidad:</label>
                        <div class="col-sm-3">
                            <select id="availability" name="availability" class="form-control" required>
                                <option value="1" {{ $product->availability == 1 ? 'selected' : '' }}>Disponible</option>
                                <option value="0" {{ $product->availability == 0 ? 'selected' : '' }}>No Disponible</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category_id" class="col-sm-2 col-form-label">Categoria:</label>
                        <div class="col-sm-3">
                            <select id="category_id" name="category_id" class="form-control" required>
                                @foreach ($categories as $category)
                                    @if($product->category != null)
                                        <option value="{{ $category->id }}" {{ $category->id == $product->category->id ? 'selected' : '' }} > {{ $category->name }}</option>
                                    @else 
                                        <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-secondary" 
                onclick="window.location='{{ url('/products') }}';">Cancelar</button>
                </form> 
            </div>
        </div>
    </div>
@endsection





