@extends("plantilla")
@section("contenido")

    <div class="container col-md-10">
        <div class="card">
            <div class="card-header">
                Estudiantes
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Semestre</th>
                            <th>Carrera</th>
                            <th>
                                <a href="{{route("estudiantes.create")}}" class="btn btn-primary">Nuevo</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($estudiantes as $estudiante)
                            <tr>
                                <td>{{$estudiante->id}}</td>
                                <td>{{$estudiante->nombre}}</td>
                                <td>{{$estudiante->apellido}}</td>
                                <td>{{$estudiante->semestre}}</td>
                                <td>{{$estudiante->relCarrera->nombre}}</td>
                                <td>
                                    <a href="{{route("estudiantes.edit", [$estudiante])}}" class="btn btn-primary">Editar</a>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{$estudiante->id}}">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{$estudiante->id}}" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Desea eliminar el registro seleccionado? Esta acción no puede deshacerse.
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{route("estudiantes.destroy", [$estudiante])}}"
                                                  method="post">
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
