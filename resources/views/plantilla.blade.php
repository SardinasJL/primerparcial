<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{url("assets/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
</head>
<body>
@include("navbar")
<div class="my-3">
    @yield("contenido")
</div>
<script src="{{url("assets/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script>
    let cambiarColor = function () {
        let etiquetaHTML = document.getElementsByTagName("html")[0];
        let temaActual = etiquetaHTML.getAttribute("data-bs-theme");
        let tema;
        if (temaActual == "light")
            tema = "dark";
        else
            tema = "light";
        etiquetaHTML.setAttribute("data-bs-theme", tema);
        localStorage.setItem("tema", tema);
    }
    window.onload = function () {
        let tema = localStorage.getItem("tema");
        document.getElementsByTagName("html")[0].setAttribute("data-bs-theme", tema);
        let btnCambiarTema = document.getElementById("btnCambiarTema");
        btnCambiarTema.onclick = function () {
            cambiarColor();
        };
    }
</script>
</body>
</html>
