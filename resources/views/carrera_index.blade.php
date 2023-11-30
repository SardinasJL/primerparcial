@extends("plantilla")
@section("contenido")
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header">
                Carreras
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Duración</th>
                            <th>
                                <a href="{{route("carreras.create")}}" class="btn btn-primary">Nuevo</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($carreras as $carrera)
                            <tr>
                                <td>{{$carrera->id}}</td>
                                <td>{{$carrera->nombre}}</td>
                                <td>{{$carrera->duracion}}</td>
                                <td>
                                    <a href="{{route("carreras.edit", [$carrera])}}" class="btn btn-primary">Editar</a>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{$carrera->id}}">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{$carrera->id}}" tabindex="-1"
                                 aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Desea eliminar el registro seleccionado? Esta acción no puede deshacerse.
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{route("carreras.destroy", [$carrera])}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Cancelar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
