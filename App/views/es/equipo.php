<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg.png') ?>">
    <link rel="canonical" href="<?= url('/quienes-somos') ?>">
    <title>Fotógrafos de bodas en Guipúzcoa | quienes somos</title>
    <meta name="description" content="KatyStudio, fotógrafos de bodas en Guipúzcoa especializados en fotografía natural y emocional. Descubre nuestro equipo y nuestra forma de contar historias únicas.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
    <?php require app_path('includes/cookielad.php'); ?>
  </head>

  <body>

    <?php require app_path('includes/es/nav.php'); ?>

    <header class="header02">
        <img class="header02__media" src="<?= asset('assets/img/views/img2.webp') ?>" alt="Pareja sesión" title="Pareja sesión">
        <div class="header02__content">
          <h1 class="header02__title">Quienes somos</h1>
          <p class="header02__text">Nos dedicamos a la fotografía y vídeo de bodas con una filosofía basada en la cercanía, la naturalidad y el cuidado por cada detalle.</p>
          <a href="#hitoForm" class="boton" title="Contactanos">Contactanos</a>
        </div>
      </header>

      
    
    <main>

      <section>
          <!-- artículo 05 -->
        <article class="art05">
            <h2>Nuestra experiencia</h2>
            
            <p class= "espacial">Nuestra experiencia en bodas nos permite conocer la importancia de cada momento y adaptarnos al ritmo de cada celebración.</p>
            <p class="espacial">Trabajamos con discreción y profesionalidad para que disfrutéis de vuestro día mientras nosotros nos encargamos de capturar cada emoción: las miradas, las sonrisas, los abrazos y todos esos pequeños detalles que hacen especial vuestra boda.</p>
            <p class="espacial">Realizamos reportajes de boda en Guipúzcoa y diferentes localizaciones del País Vasco, desplazándonos hasta el lugar elegido por cada pareja para contar su historia.
              Conocemos la importancia del entorno y aprovechamos cada espacio para crear imágenes únicas, combinando la belleza de los escenarios con una fotografía cuidada y emocional.
            </p>
            
            <a href="#formulario" class="boton" title="Escribenos">Escribenos</a>
        </article>
      </section>

      <section>
          <!-- Artículo 11 -->
        <h2>Historias que hemos contado</h2>
            <article class="art11">

              
              <div>
                  <img src="<?= asset('assets/img/views/img-beso.webp') ?>" alt="Pareja de novios besándose durante una sesión fotográfica" title="Pareja de novios besándose durante una sesión fotográfica">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-playa-novia.webp') ?>" alt="Novia durante una sesión de fotos en la playa" title="Novia durante una sesión de fotos en la playa">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-castillo.webp') ?>" alt="Pareja de novios durante una sesión fotográfica en un castillo" title="Pareja de novios durante una sesión fotográfica en un castillo">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-pareja-1.webp') ?>" alt="Pareja de novios durante una sesión fotográfica" title="Pareja de novios durante una sesión fotográfica">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-barco.webp') ?>" alt="Pareja de novios durante una sesión de fotos en un barco" title="Pareja de novios durante una sesión de fotos en un barco">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-coche.webp') ?>" alt="Pareja de novios dentro de un coche durante la sesión fotográfica" title="Pareja de novios dentro de un coche durante la sesión fotográfica">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img2.webp') ?>" alt="Ramo de flores de una novia durante una sesión fotográfica" title="Ramo de flores de una novia durante una sesión fotográfica">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/vestido.webp') ?>" alt="Novia mostrando los detalles de su vestido durante la sesión" title="Novia mostrando los detalles de su vestido durante la sesión">
              </div>

          </article>
      </section>

      <div class="fantasma" id="hitoForm"></div>

      <?php require app_path('includes/es/_formulario.php'); ?>
      
    </main>
    

    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
