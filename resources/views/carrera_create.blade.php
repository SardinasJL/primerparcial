@extends("plantilla")
@section("contenido")
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header">
                Crear carrera
            </div>
            <div class="card-body">
                <form action="{{route("carreras.store")}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="duracion">Duración</label>
                        <input type="text" name="duracion" id="duracion" class="form-control">
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
