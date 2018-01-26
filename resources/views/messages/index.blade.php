@extends('plantilla.base')

@section('title', 'Index')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Index</h1>
                <div class="panel panel-default">
                    <div class="panel-heading text-right">
                        <button class="btn btn-primary">Crear Mensaje</button>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Usuario</th>
                                        <th>Mensaje</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>0001</td>
                                        <td>Pedro Perez</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quasi dolor.</td>
                                        <td>
                                            <button class="btn btn-info">Mostrar</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-warning">Editar</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger">Eliminar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0001</td>
                                        <td>Pedro Perez</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quasi dolor.</td>
                                        <td>
                                            <button class="btn btn-info">Mostrar</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-warning">Editar</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger">Eliminar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0001</td>
                                        <td>Pedro Perez</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quasi dolor.</td>
                                        <td>
                                            <button class="btn btn-info">Mostrar</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-warning">Editar</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger">Eliminar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0001</td>
                                        <td>Pedro Perez</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quasi dolor.</td>
                                        <td>
                                            <button class="btn btn-info">Mostrar</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-warning">Editar</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger">Eliminar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                      <li>
                                        <a href="#" aria-label="Previous">
                                          <span aria-hidden="true">&laquo;</span>
                                        </a>
                                      </li>
                                      <li><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">5</a></li>
                                      <li>
                                        <a href="#" aria-label="Next">
                                          <span aria-hidden="true">&raquo;</span>
                                        </a>
                                      </li>
                                    </ul>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection