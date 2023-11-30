@extends("plantilla")
@section("contenido")

    <div class="container col-md-10">
        <div class="card">
            <div class="card-header">
                Editar estudiante
            </div>
            <div class="card-body">
                <form action="{{route("estudiantes.update", [$estudiante])}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control"
                               value="{{$estudiante->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" id="apellido" class="form-control"
                               value="{{$estudiante->apellido}}">
                    </div>
                    <div class="mb-3">
                        <label for="semestre">Semestre</label>
                        <input type="number" name="semestre" id="semestre" class="form-control"
                               value="{{$estudiante->semestre}}">
                    </div>
                    <div class="mb-3">
                        <label for="carreras_id">Carrera</label>
                        <select name="carreras_id" id="carreras_id" class="form-select">
                            @foreach($carreras as $carrera)
                                <option
                                    value="{{$carrera->id}}" {{$estudiante->carreras_id==$carrera->id?"selected":""}}>
                                    {{$carrera->nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{route("estudiantes.index")}}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

