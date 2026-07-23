<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg.png') ?>">
    <link rel="canonical" href="<?= url('/productos') ?>">
    <title>Fotógrafos de bodas en Guipúzcoa | Nuestros servicios</title>
    <meta name="description" content="Servicios de fotografía y vídeo de bodas en Guipúzcoa. En KatyStudio creamos reportajes naturales, emotivos y personalizados para conservar cada momento especial.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
    <?php require app_path('includes/cookielad.php'); ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <header class="header02">
        <img class="header02__media" src="<?= asset('assets/img/views/img-iglesia.webp') ?>" alt="Pareja de novios durante una sesión fotográfica en una iglesia" title="Pareja de novios durante una sesión fotográfica en una iglesia">
            <div class="header02__content">
            
            <h1 class="header02__title">Fotografía y vídeo de bodas en Guipúzcoa</h1>
            <p class="header02__text">Nuestros servicios de fotografía y vídeo de bodas están pensados para contar vuestra historia tal y como la vivís. Capturamos cada emoción, cada mirada y cada detalle de vuestro día con un estilo natural, cercano y profesional.</p>
            <a href="#formulario" class="boton" title="Contáctanos">Contáctanos</a>
        </div>
    </header>

    <main>

    <section>
      <article class="art12">
        <h2>El proceso de vuestro reportaje fotográfico</h2>
            <p class="espacial">Nuestro servicio de fotografía de bodas está pensado para capturar cada etapa del día con un estilo natural, elegante y personalizado. Desde los preparativos hasta la celebración final, nos encargamos de inmortalizar cada emoción, cada mirada y cada pequeño detalle que hace que vuestra historia sea única. Trabajamos de forma cercana y discreta para crear imágenes auténticas, llenas de sensibilidad y capaces de transmitir la esencia de uno de los días más importantes de vuestra vida.</p>
              <div>
                <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-pareja-1.webp') ?>" alt="Pareja de novios durante una sesión fotográfica" title="Pareja de novios durante una sesión fotográfica">
                  <div>
                      <h3>Preparativos</h3>
                      <p>Los primeros nervios, las sonrisas, los detalles del vestido, los últimos retoques y los momentos compartidos con familiares y amigos forman parte de una historia que empieza mucho antes de la ceremonia.</p>
                      <p>Capturamos esos instantes íntimos y espontáneos que hacen que cada boda sea diferente.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/sesion-pareja-iglesia.webp') ?>" alt="Novios durante la ceremonia de boda" title="Novios durante la ceremonia de boda">
                  <div>
                      <h3>Ceremonia</h3>
                      <p>La ceremonia es uno de los momentos más importantes de vuestro día. Capturamos cada emoción, gesto y mirada para conservar todos los recuerdos de ese instante tan especial.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-mesa.webp') ?>" alt="Mesa preparada para la celebración de una boda" title="Mesa preparada para la celebración de una boda">
                  <div>
                      <h3>Banquete</h3>
                      <p>La celebración, los brindis, las risas y los momentos compartidos con vuestros invitados forman parte esencial del reportaje de boda.</p>
                      <p>Nos encargamos de fotografiar cada detalle para que podáis revivir la alegría de vuestro día.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-castillo.webp') ?>" alt="Pareja de novios durante una sesión fotográfica en un castillo" title="Pareja de novios durante una sesión fotográfica en un castillo">
                  <div>
                      <h3>Sesión de pareja</h3>
                      <p>Creamos un espacio tranquilo para disfrutar juntos y conseguir fotografías naturales que reflejen vuestra conexión como pareja.</p>
                      <p>Buscamos imágenes auténticas, alejadas de poses forzadas, donde vuestra personalidad sea la protagonista.</p>
                  </div>
                  </div>
              </div>
          </article>
    </section>

    <section>
        <!-- artículo 09 -->
          <article class="art09">

              <h2>Nuestros packs de boda</h2>

              <div class="art09-content">

                  <div class="contenedor-lista">
                  <h3>Sesión de fotografía</h3>
                  <ul>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Cobertura desde los preparativos hasta la celebración.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Reportaje fotográfico completo del día.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Captura de los momentos más importantes y de los pequeños detalles.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Entrega de las fotografías en alta resolución.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Álbum de boda y copias impresas (opcional).</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Precio total: 3.450€</span>
                      </li>
                  </ul>
                  </div>

                  <div class="contenedor-lista">
                  <h3>Servicio de vídeo</h3>
                  <ul>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Cobertura completa de la boda.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Vídeo cinematográfico y natural.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Edición profesional.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Tráiler con los mejores momentos.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Película completa de la boda.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Entrega digital en alta calidad.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Precio total: 4.030€</span>
                      </li>
                  </ul>
                  </div>

                    <div class="contenedor-lista">
                        <h3>Sesión de fotografía + vídeo</h3>
                    <ul>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Cobertura completa de fotografía y vídeo.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Captura de cada momento desde todos los ángulos.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Reportaje fotográfico y vídeo cinematográfico.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Edición profesional de fotografías y vídeo.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Galería privada online y entrega digital en alta resolución.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                      <span>Precio total: 6.590€</span>
                      </li>
                  </ul>
                  </div>


              </div>

          </article>
    </section>

    <section>
      <article class="art12">
        <h2>El proceso para crear vuestro vídeo de boda</h2>
            <p class="espacial">Un vídeo permite volver a escuchar las voces, sentir las emociones y revivir cada instante de una forma única. Capturamos los pequeños detalles, las miradas, las sonrisas y esos momentos espontáneos que hacen que cada celebración sea diferente. A través de una edición cuidada y una narrativa cinematográfica, creamos un recuerdo que no solo muestra lo que ocurrió, sino que transmite las sensaciones vividas durante ese día tan especial.</p>
            <p class="espacial">Creamos vídeos de boda personalizados cuidando tanto la grabación como la edición final. Cada historia es única, por eso trabajamos con una mirada cercana y profesional para capturar los momentos más importantes de vuestro día.</p>
              <div>
                <div class="ficha">
                  <img src="<?= asset('assets/img/views/sesion-boda.webp') ?>" alt="Equipo trabajando grabación" title="Equipo trabajando grabación">
                  <div>
                      <h3>Grabación</h3>
                      <p>Capturamos los momentos más importantes de la boda con una realización profesional, prestando atención tanto a los grandes momentos como a los pequeños detalles.</p>
                      
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/sesion-fotos-espejo.webp') ?>" alt="Sesion fotos vestido y complementos" title="Sesion fotos vestido y complementos">
                  <div>
                      <h3>Edición</h3>
                      <p>La edición es una parte fundamental para transformar todas las imágenes grabadas en una historia audiovisual con ritmo, emoción y personalidad.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/dron-boda.webp') ?>" alt="Drone grabando imágenes aéreas durante una boda" title="Drone grabando imágenes aéreas durante una boda">
                  <div>
                      <h3>Drone</h3>
                      <p>La grabación aérea permite mostrar una perspectiva diferente del lugar de celebración y aportar imágenes espectaculares al vídeo final.</p>
                      
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/video-boda.webp') ?>" alt="Trailer de la boda" title="Trailer de la boda">
                  <div>
                      <h3>Tráiler</h3>
                      <p>Creamos piezas breves y emocionantes que resumen la esencia de vuestra boda y os permiten compartir los mejores momentos.</p>
                      
                  </div>
                  </div>
              </div>
          </article>
    </section>

    
    <section id="section5">
        

        <article class="artGrid">
          <div>
            <img src="<?= asset('assets/img/views/img-castillo.webp') ?>" alt="Pareja de novios durante una sesión fotográfica en un castillo" title="Pareja de novios durante una sesión fotográfica en un castillo">
          </div>
          <div>
            <img src="<?= asset('assets/img/views/img-coche.webp') ?>" alt="Pareja de novios durante una sesión fotográfica en un coche" title="Pareja de novios durante una sesión fotográfica en un coche">
          </div>
          <div>
            <img src="<?= asset('assets/img/views/vestido.webp') ?>" alt="Detalles del vestido de novia durante una sesión fotográfica" title="Detalles del vestido de novia durante una sesión fotográfica">
          </div>
          <div>
            <img src="<?= asset('assets/img/views/img-playa-novia.webp') ?>" alt="Novia caminando por la playa durante una sesión fotográfica" title="Novia caminando por la playa durante una sesión fotográfica">
          </div>
          <div>
            <img src="<?= asset('assets/img/views/video-boda.webp') ?>" alt="Vídeo de boda durante la celebración de los novios" title="Vídeo de boda durante la celebración de los novios">
          </div>
          <div>
            <img src="<?= asset('assets/img/views/img-pareja-andando.webp') ?>" alt="Pareja de novios caminando durante una sesión fotográfica" title="Pareja de novios caminando durante una sesión fotográfica">
          </div>
        </article>

    </section>

    <?php require app_path('includes/es/_formulario.php'); ?>
    
    </main>
    
    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
