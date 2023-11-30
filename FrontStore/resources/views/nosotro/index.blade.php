@extends('layouts.app_index')
@section('container')
<main class="contenedor">
    <h1>Nosotros</h1>

    <div class="nosotros">
        <div class="nosotros__contenido">
            <p>¡Bienvenido a FrontEndStore, tu destino definitivo para expresar tu amor por la programación a través de la moda! En FrontEndStore, fusionamos la elegancia del diseño de prendas con la pasión por el código, ofreciendo una colección única de playeras con estampados inspirados en diferentes lenguajes de programación. </p>
            <p>En el corazón de nuestro enfoque se encuentra la idea de que la moda y la tecnología pueden coexistir armoniosamente. Nuestra misión es brindarte prendas de alta calidad que no solo reflejen tu estilo individual, sino que también celebren la creatividad y la innovación que define el mundo de la programación.</p>
            <p>En FrontEndStore, cada prenda cuenta una historia, desde los intrincados diseños que representan tus lenguajes de programación favoritos hasta los materiales de primera calidad que garantizan comodidad y durabilidad. Nos esforzamos por ser más que una tienda de ropa; somos una comunidad de mentes creativas que comparten la misma pasión por el desarrollo y el diseño.</p>
        </div>
        <img class="nosotros__imagen" src="{{Vite::asset('/resources/img/nosotros.jpg')}}" alt="imagen nosotros">
    </div>
</main>

<section class="contenedor comprar">
    <h2 class="comprar__titulo">¿Porqué Comprar con nosotros?</h2>

    <div class="bloques">
        <div class="bloque">
            <img class="bloque__imagen" src="{{Vite::asset('/resources/img/icono_1.png')}}" alt="porque comprar">
            <h3 class="bloque__titulo">El Mejor Precio</h3>
            <p>Ofrecemos estampados de programación asequibles sin sacrificar calidad. En FrontEndStore, la moda y la economía se encuentran para brindarte estilo sin afectar tu presupuesto.</p>
        </div> <!--.bloque-->

        <div class="bloque">
            <img class="bloque__imagen" src="{{Vite::asset('/resources/img/icono_2.png')}}" alt="porque comprar">
            <h3 class="bloque__titulo">Para Devs</h3>
            <p>FrontEndStore celebra la programación en cada prenda. Diseñado exclusivamente para desarrolladores, nuestra colección establece un vínculo único entre el código y la moda, comprensible solo para los devs.</p>
        </div> <!--.bloque-->

        <div class="bloque">
            <img class="bloque__imagen" src="{{Vite::asset('/resources/img/icono_3.png')}}" alt="porque comprar">
            <h3 class="bloque__titulo">Envío Gratis</h3>
            <p>Disfruta de nuestras exclusivas playeras sin preocuparte por el envío. En FrontEndStore, la conveniencia es clave, ofreciendo envío gratuito para que tu experiencia de compra sea aún más placentera.</p>
        </div> <!--.bloque-->

        <div class="bloque">
            <img class="bloque__imagen" src="{{Vite::asset('/resources/img/icono_4.png')}}" alt="porque comprar">
            <h3 class="bloque__titulo">La Mejor Calidad</h3>
            <p>En FrontEndStore, la calidad es innegociable. Cada prenda está confeccionada con los mejores materiales para garantizar durabilidad y comodidad. Estilo que perdura, calidad que perdura.</p>
        </div> <!--.bloque-->
    </div><!--.bloques-->
</section> 
@endsection