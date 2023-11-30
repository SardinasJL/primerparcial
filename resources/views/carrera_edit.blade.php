@extends("plantilla")
@section("contenido")
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header">
                Editar carrera
            </div>
            <div class="card-body">
                <form action="{{route("carreras.update", [$carrera])}}" method="post">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="{{$carrera->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="duracion">Duración</label>
                        <input type="text" name="duracion" id="duracion" class="form-control"
                               value="{{$carrera->duracion}}">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{route("carreras.index")}}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
