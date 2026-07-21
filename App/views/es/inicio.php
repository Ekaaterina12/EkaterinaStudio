<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg.png') ?>">
    <link rel="canonical" href="<?= url('/') ?>">
    <title>Fotógrafos de bodas en Guipúzcoa | Katy Studio</title>
    <meta name="description" content="KatyStudio, estudio de fotografía de bodas especializado en capturar momentos únicos y emociones inolvidables de tu gran día.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    

    <?php require app_path('includes/es/nav.php'); ?>

    <header class="header01">
      <img class="header01__media" src="<?= asset('assets/img/views/img-blancoynegro.webp') ?>" alt="Sessión de fotos en pareja" title="Sessión de fotos en pareja">
      <div class="header01__content">
        
        <h1>Fotógrafo de bodas en Guipúzcoa</h1>
        <p class="header01__text">Fotógrafos especializados en bodas, creando recuerdos naturales y emocionantes para que reviváis vuestro gran día una y otra vez.</p>
        <a href=" #formulario" class="boton" title="Cuéntanos vuestra historia">Cuéntanos vuestra historia</a>
      </div>
    </header>

    <main>

    
        <section>
          <!-- Artículo 02 -->
          <article class="art02">

              <div class="textos">
                  <h2>Pasión por la fotografía de bodas</h2>
                  <p>Somos un equipo de fotógrafos especializados en bodas, apasionados por capturar la esencia de cada pareja y transformar momentos únicos en recuerdos que perduren para siempre. Entendemos la fotografía de boda como una forma de contar historias reales, donde cada mirada, cada emoción y cada pequeño detalle tienen un significado especial.</p>

                  <p>Nuestro estilo se basa en la naturalidad y la espontaneidad, buscando reflejar cada instante tal y como sucede, sin artificios. Acompañamos a cada pareja con cercanía y discreción para que puedan disfrutar de su gran día mientras nosotros nos encargamos de inmortalizar los momentos más importantes y las emociones que harán de su historia un recuerdo inolvidable.</p>

                  <!-- <a href="" class="boton">Más info</a> -->
                  <a href="http://localhost:3000/es/quienes-somos" class="moduloBoton02" title="Saber más">
                      <span>Saber más</span>
                      <img src="<?= asset('assets/img/icons/arrow-forward-outline.svg') ?>" alt="icono outline" title="icono outline">
                  </a>
              </div>

              <div class="imagenes">
                  <img src="<?= asset('assets/img/views/img-pareja-1.webp') ?>" alt="Pareja de novios besándose durante una sesión fotográfica" title="Pareja de novios besándose durante una sesión fotográfica">
                  <img src="<?= asset('assets/img/views/img-coche.webp') ?>" alt="Novios dentro de un coche clásico el día de su boda" title="Novios dentro de un coche clásico el día de su boda">
                  <img src="<?= asset('assets/img/views/img-vestido.webp') ?>" alt="Vestido de novia colgado antes de la ceremonia" title="Vestido de novia colgado antes de la ceremonia">
              </div>

          </article>

        </section>

        <section>
            <article class="art09">

              <h2>Nuestros servicios</h2>

              <div class="art09-content">

                  <div class="contenedor-lista">
                  <h3>Fotografía de bodas</h3>
                    <ul>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                        <span>Cobertura fotográfica completa de la boda.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                        <span>Fotografías naturales y espontáneas.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                        <span>Edición profesional de las imágenes.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                        <span>Galería online privada.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                        <span>Selección de fotografías en alta resolución.</span>
                        </li>
                    </ul>
                    </div>

                    <div class="contenedor-lista">
                    <h3>Vídeo de bodas</h3>
                    <ul>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                        <span>Grabación profesional del día completo.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                        <span>Captura de momentos y emociones espontáneas.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                        <span>Edición cinematográfica personalizada.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                        <span>Música y montaje adaptados a vuestra historia.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="icono circulo" title="icono circulo">
                        <span>Vídeo final en alta calidad.</span>
                        </li>
                    </ul>
                    </div>

                </div>

            </article>
        </section>

        <section>
            <article class="art11">
              
              <div>
                  <img src="<?= asset('assets/img/views/camara-fotos.webp') ?>" alt="Cámara fotográfica profesional" title="Cámara fotográfica profesional"> 
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-sesion.webp') ?>" alt="Pareja durante una sesión preboda" title="Pareja durante una sesión preboda">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-castillo.webp') ?>" alt="Novios junto a un castillo" title="Novios junto a un castillo">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-barco.webp') ?>" alt="Pareja navegando en un barco" title="Pareja navegando en un barco">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/video-boda.webp') ?>" alt="Novios durante la celebración de su boda" title="Novios durante la celebración de su boda">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/sesion-fotos-espejo.webp') ?>" alt="Novios reflejados en un espejo" title="novios reflejados en un espejo">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-coche.webp') ?>" alt="Pareja en un coche clásico" title="Pareja en un coche clásico">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/vestido.webp') ?>" alt="Vestido de novia preparado para la ceremonia" title="Vestido de novia preparado para la ceremonia">
              </div>

          </article>
        </section>

        <?php require app_path('includes/es/_formulario.php'); ?>

    </main>
   
    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>
