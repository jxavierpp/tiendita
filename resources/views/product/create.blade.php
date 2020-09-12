@extends('layouts.app')

@section('content')
    <div id="content">
        <div class="card">
            <div class="card-header title">
                <h4><strong>Agregar Producto</strong></h4>
            </div>

            <div class="card-body">
                <form action={{ url('/products/store/') }} method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="name" name="name" value="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cost" class="col-sm-2 col-form-label">Costo:</label>
                        <div class="col-sm-3">
                            <input type="number" step="0.01" class="form-control" id="cost" name="cost" value="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inventory" class="col-sm-2 col-form-label">Inventario:</label>
                        <div class="col-sm-3">
                            <input type="number"  class="form-control" id="inventory" name="inventory" value="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="availability" class="col-sm-2 col-form-label">Disponibilidad:</label>
                        <div class="col-sm-3">
                            <select id="availability" name="availability" class="form-control" required>
                                <option selected value="1">Disponible</option>
                                <option value="0">No Disponible</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category_id" class="col-sm-2 col-form-label">Categoria:</label>
                        <div class="col-sm-3">
                            <select id="category_id" name="category_id" class="form-control" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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





