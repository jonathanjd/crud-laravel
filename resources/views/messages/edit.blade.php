@extends('plantilla.base')

@section('title', 'Edit')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit</h1>
                <hr>
                <div clas="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading text-right">
                            <a class="btn btn-default" href="#">Regresar</a>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Nombre de Usuario">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Mi Mensaje"></textarea>
                                </div>
                                <button class="btn btn-primary">Editar Mensaje</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection