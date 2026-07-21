<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg.png') ?>">
    <link rel="canonical" href="<?= url('/contacto') ?>">
    <title>Fotógrafos de bodas en Guipúzcoa | Contacta con nosotros</title>
    <meta name="description" content="Contacta con KatyStudio, fotógrafos de bodas en Guipúzcoa. Cuéntanos vuestra historia y solicita información sobre nuestros servicios de fotografía.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
</head>
<body>
    <?php require app_path('includes/es/nav.php'); ?>

    <header class="header02">
        <img class="header02__media" src="<?= asset('assets/img/views/img-anillos.webp') ?>" alt="Sesion de fotos de anillos" title="Sesion de fotos de anillos">
            <div class="header02__content">
            
            <h1 class="header02__title">Contacto fotógrafo de bodas en Guipúzcoa</h1>
            <p class="header02__text">Si queréis conocer más detalles sobre nuestros servicios de fotografía y vídeo de bodas en Guipúzcoa, estaremos encantados de atenderos.</p>
            <a href="#formulario" class="boton" title="Contacta con nosotros">Contactanos</a> 
        </div>
    </header>

    <main>

    <section>
        <article class="art12">
            <h2>Nuestro proceso de trabajo</h2>
            <p class="espacial">Sabemos que organizar una boda implica cuidar muchos detalles, por eso hemos creado una forma de trabajar sencilla, cercana y profesional. Nuestro objetivo es acompañaros durante todo el proceso para que tengáis la tranquilidad de que cada momento importante quedará registrado de la mejor manera.</p>
        
              <div>
                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-sesion.webp') ?>" alt="Pareja durante una sesión fotográfica" title="Pareja durante una sesión fotográfica">
                  <div>
                      <h3>1. Primer contacto y reunión</h3>
                      <p>Todo comienza con una conversación. Queremos conoceros, saber cómo imagináis vuestra boda y entender qué momentos son importantes para vosotros.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-castillo.webp') ?>" alt="Novios frente a un castillo" title="Novios frente a un castillo">
                  <div>
                      <h3>2. Reserva de la fecha</h3>
                      <p>Una vez decidís contar con nosotros, formalizamos la reserva de vuestra boda para asegurar nuestra disponibilidad ese día.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-beso.webp') ?>" alt="Novios besándose durante la ceremonia" title="Novios besándose durante la ceremonia">
                  <div>
                      <h3>3. Planificación personalizada</h3>
                      <p>Cada boda es diferente, por eso dedicamos tiempo a conocer todos los detalles del día.</p>
                      <p>Hablamos sobre los horarios, los momentos clave, la organización de la celebración y cualquier aspecto que pueda ayudarnos a conseguir un resultado más completo y natural.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-pareja-1.webp') ?>" alt="Pareja disfrutando de una sesión de fotos" title="Pareja disfrutando de una sesión de fotos">
                  <div>
                      <h3>4. El día de la boda</h3>
                      <p>Llegamos preparados para capturar cada instante de vuestra boda de forma discreta y profesional.</p>
                      <p>Nos encargamos de documentar las emociones, las miradas, los abrazos y todos esos pequeños momentos que muchas veces pasan desapercibidos.</p>
                  </div>
                  </div>

                <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-barco.webp') ?>" alt="Novios navegando en un barco sesión" title="Novios navegando en un barco sesión">
                  <div>
                      <h3>5. Entrega del reportaje</h3>
                      <p>Finalmente recibiréis vuestro reportaje de boda preparado con todo el cuidado que merece.</p>
                      <p>Un recuerdo creado para volver a emocionaros con el paso de los años y revivir cada instante de uno de los días más importantes de vuestra vida.</p>
                  </div>
                  </div>
              </div>
          </article>
    </section>

    <section>
        <!-- artículo 05 -->
        <article class="art05">
            <h2>¿Hablamos de vuestra boda?</h2>
            <p class="espacial">Nuestro equipo estará encantado de escuchar vuestra historia, conocer cómo imagináis vuestro gran día y resolver cualquier duda que tengáis. Contadnos vuestra   propuesta, la fecha de la boda y todos esos detalles que hacen que vuestro día sea único. Nos pondremos en contacto con vosotros para comprobar la disponibilidad y empezar a preparar juntos un recuerdo inolvidable.</p>
            <p class="espacial">Creemos que la confianza y la cercanía son fundamentales para conseguir un reportaje auténtico, por eso queremos conoceros desde el primer momento y acompañaros durante todo el proceso. Estamos deseando formar parte de uno de los días más importantes de vuestra vida y convertir cada instante en un recuerdo que perdure para siempre.</p>
            <a href="https://cw-katy.webda.eus/es/servicios" class="boton" title="Ver todos los servicios">Ver todos los servicios</a>
        </article>

    </section>

    
    <section id="section5">


        <h2 data-lang="encabezado">Trabajos realizados</h2>

            <article class="artGrid">
            <div>
                <img src="<?= asset('assets/img/views/img-anillos.webp') ?>" alt="Anillos de boda durante una sesión fotográfica" title="Anillos de boda durante una sesión fotográfica">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/img2.webp') ?>" alt="Pareja de novios durante una sesión de fotos" title="Pareja de novios durante una sesión de fotos">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/img-vestido.webp') ?>" alt="Vestido de novia preparado para la sesión fotográfica" title="Vestido de novia preparado para la sesión fotográfica">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/img-blancoynegro2.webp') ?>" alt="Pareja de novios en una fotografía en blanco y negro" title="Pareja de novios en una fotografía en blanco y negro">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/camara-fotos.webp') ?>" alt="Cámara fotográfica profesional" title="Cámara fotográfica profesional">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/img-sesion.webp') ?>" alt="Pareja durante una sesión fotográfica de boda" title="Pareja durante una sesión fotográfica de boda">
            </div>
            </article>

       
    </section>
    
    <?php require app_path('includes/es/_formulario.php'); ?>
    
    </main>


    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
