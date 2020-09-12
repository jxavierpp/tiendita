@extends('layouts.app')

@section('content')
    <div id="content">
        <div class="card">
            <div class="card-header title">
                <h4><strong>Editar categoria</strong></h4>
            </div>

            <div class="card-body">
                <form action={{ url('/categories/store/') }} method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="name" name="name" value="" required>
                        </div>
                    </div>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-secondary" 
                onclick="window.location='{{ url('/categories') }}';">Cancelar</button>
                </form> 
            </div>
        </div>
    </div>
@endsection





