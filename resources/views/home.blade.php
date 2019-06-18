@extends('master')

@section('title')
  Jirafa Brew House
@endsection

<!--Aca esta el section main de home-->

@section('main')

  <main>
    <div id="contenido">
      <section class="landing" id="home">
          <div class="bloque-home">
              <video class="background-video" poster="http://adnhd.com/wp-content/uploads/2018/10/0029462316.jpg" src="IMG/Loop-Background.mp4" autoplay loop muted></video>
              <div class="landing">
                  <img class="logo-landing-img" src="IMG\jirafa-brew-house-logo.png" alt="jirafa-logo">
              </div>
          </div>
      </section>
     <section id="section-nosotros">
          <div class="nosotros">
              <p class="paragraph-us"><h1 class="title-princ">Nosotros</h1>¡Hablemos de cervezas! Somos una cervecería que hace <i>cerveza de garage</i>, ¿Qué significa esto? Somos un emprendimiento de dos amigos que les gusta el mundo de la cerveza, tenemos nuestra fábrica en nuestro garage.. y muchas ganas de aprender. Las recetas de todas nuestras birras se encuentran en linea. ¿Estas comenzando y tenes dudas? <a style="color:#ffbb37" href="#section-contact">No dudes en contactarnos</a></p>
              <p class="dektop-us">Una vez al mes hacemos una visita guiada por la fábrica acompañada de una pequeña cocción de unos 20 litros, allí compartimos nuestros conocimientos, aprendemos de ustedes, y les contamos nuestra experiencia.</p>
          </div>
    </section>

      <!-- categorias o estilos de cerveza -->
      <section class="section-estilos" id="section-estilos">
        <h1 class="title-princ">ESTILOS</h1>
          <article class="estilo">
            <div class="photo-container">
                <img class="photo" src="IMG/estilo-rubia.jpg" alt="estilo 01">
            </div>
            <div class="title">
                <h1>Rubia</h1>
                <p class="title">IPA's o Blonde, muy suaves o muy power.</p>
            </div>
          </article>
          <article class="estilo">
            <div class="photo-container">
              <img class="photo" src="IMG/estilo-negra.jpg" alt="estilo 02">
            </div>
            <div class="title">
                <h1>Negra</h1>
                <p class="title">Stout, porter, mucho aroma y sabor.</p>
            </div>
          </article>
          <article class="estilo">
            <div class="photo-container">
              <img class="photo" src="IMG/estilo-roja.jpg" alt="estilo 03">
            </div>
            <div class="title">
                <h1>Roja</h1>
                <p class="title">Cervezas maltosas, agradables al paladar</p>
            </div>
          </article>
          <article class="estilo">
            <div class="photo-container">
              <img class="photo" src="IMG/estilo-reserva.jpg" alt="estilo 04">
            </div>
            <div class="title">
                <h1>Reserva</h1>
                <p class="title">Cervezas doradas reserva en barriles de whisky.</p>
            </div>
          </article>
      </section>
      <!-- Nota: Hay que volver a hacer el formulario de Login y Signup con el buton en header. Vamos a re-hacer el forumulario con Laravel.-->

      </div>
    </main>

@endsection
