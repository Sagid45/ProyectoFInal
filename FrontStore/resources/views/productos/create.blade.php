@extends('layouts.app_index')
@section('container')
<main class="container-create seccion">
    <h1>Nuevo Producto</h1>

    <form class="formulario-crear" action="{{route('ProductosStore')}}" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <legend>Información del Producto</legend>

            <label for="nombre">Titulo:</label>
            <input type="text" placeholder="Titulo" id="titulo" name="titulo" value="{{old('titulo')}}">
            @error('titulo')
                <div class="alerta">
                    {{$message}}
                </div>
            @enderror

            <label for="resumen">Resumen:</label>
            <textarea name="resumen" id="resumen" value="{{old('resumen')}}"></textarea>
            @error('resumen')
                <div class="alerta">
                    {{$message}}
                </div>
            @enderror

            <label for="precio">Precio:</label>
            <input type="text" name="precio" id="precio" value="{{old('precio')}}">
            @error('precio')
                <div class="alerta">
                    {{$message}}
                </div>
            @enderror
            
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen" accept="image/*" onchange="mostrarVistaPrevia(event)">
            <div id="vista-previa">
                @if(old('imagen_actual'))
                    <img src="{{ old('imagen_actual') }}" alt="Vista previa">
                @endif
            </div>
            @error('imagen')
                <div class="alerta">
                    {{ $message }}
                </div>
            @enderror
            <input type="hidden" name="imagen_actual" id="imagen_actual" value="{{ old('imagen_actual') }}">
        </fieldset>
        <input type="submit" value="Guardar" class="boton-amarillo btn-create-blog">
        <a href="{{route('index')}}" class="boton-amarillo btn-create-blog">Cancelar</a>
    </form>
</main>

<script>
    function mostrarVistaPrevia(event) {
            var input = event.target;

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    var vistaPrevia = document.getElementById('vista-previa');
                    vistaPrevia.innerHTML = '<img src="' + e.target.result + '" alt="Vista previa">';

                    // Almacena la URL de la imagen en el campo oculto
                    document.getElementById('imagen_actual').value = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

    function abrirSeleccionadorDeArchivo() {
        // Simula un clic en el input de archivo
        document.getElementById('imagen').click();
    }
</script>
@endsection