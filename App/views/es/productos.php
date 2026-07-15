<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/productos') ?>">
    <title>Nuestros productos de panaderia y pasteleria</title>
    <meta name="description" content="Descubre nuestros productos de panaderia, pasteleria, bolleria y especialidades artesanas.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

      <header class="header02">
        <img class="header02__media" src="<?= asset('assets/img/views/img-iglesia.webp') ?>" alt="Sesión en la iglesia">
            <div class="header02__content">
            
            <h1 class="header02__title">Nuestros servicios en Guipúzcoa</h1>
            <p class="header02__text">Nuestros servicios de fotografía y vídeo de bodas están pensados para contar vuestra historia tal y como la vivís. Capturamos cada emoción, cada mirada y cada detalle de vuestro día con un estilo natural, cercano y profesional.</p>
            <a href="#showroom-recursos" class="boton">Contactanos</a>
        </div>
    </header>

    <main>

    <section>
      <article class="art12">
        <h2>El proceso para crear vuestras fotografías de boda</h2>
            <p class="espacial">Nuestro servicio de fotografía de bodas está pensado para capturar cada etapa del día con un estilo natural, elegante y personalizado. Desde los preparativos hasta la celebración final, nos encargamos de inmortalizar cada emoción, cada mirada y cada pequeño detalle que hace que vuestra historia sea única. Trabajamos de forma cercana y discreta para crear imágenes auténticas, llenas de sensibilidad y capaces de transmitir la esencia de uno de los días más importantes de vuestra vida.</p>
              <div>
                <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-pareja-1.webp') ?>" alt="Sesión de fotos beso" title="">
                  <div>
                      <h3>Preparativos</h3>
                      <p>Los primeros nervios, las sonrisas, los detalles del vestido, los últimos retoques y los momentos compartidos con familiares y amigos forman parte de una historia que empieza mucho antes de la ceremonia.</p>
                      <p>Capturamos esos instantes íntimos y espontáneos que hacen que cada boda sea diferente.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/sesion-pareja-iglesia.webp') ?>" alt="Sesion de fotos novios" title="">
                  <div>
                      <h3>Ceremonia</h3>
                      <p>La ceremonia es uno de los momentos más importantes de vuestro día. Capturamos cada emoción, gesto y mirada para conservar todos los recuerdos de ese instante tan especial.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-mesa.webp') ?>" alt="Banquete mesa sesión" title="">
                  <div>
                      <h3>Banquete</h3>
                      <p>La celebración, los brindis, las risas y los momentos compartidos con vuestros invitados forman parte esencial del reportaje de boda.</p>
                      <p>Nos encargamos de fotografiar cada detalle para que podáis revivir la alegría de vuestro día.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-castillo.webp') ?>" alt="Sesion de fotos en el castillo novios" title="">
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
                  <img src="<?= asset('assets/img/views/dron-boda.webp') ?>" alt="Dron grababando en la boda" title="Dron grababando en la boda">
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
            <img src="<?= asset('assets/img/views/img-castillo.webp') ?>" alt="pareja en el castillo sesión">
          </div>
          <div>
            <img src="<?= asset('assets/img/views/img-coche.webp') ?>" alt="Sesión de pareja en el coche">
          </div>
          <div>
            <img src="<?= asset('assets/img/views/vestido.webp') ?>" alt="Sesion de vestido">
          </div>
          <div>
            <img src="<?= asset('assets/img/views/img-playa-novia.webp') ?>" alt="Novia corriendo por la playa sesion">
          </div>
          <div>
            <img src="<?= asset('assets/img/views/video-boda.webp') ?>" alt="video de la boda">
          </div>
          <div>
            <img src="<?= asset('assets/img/views/img-pareja-andando.webp') ?>" alt="Sesión de la pareja andando">
          </div>
        </article>

    </section>

    <section>
            <!-- artForm02 ajax -->
            <article class="artForm02">          

                <h2>Contacta con nosotros</h2>
                <div>
                    <div class="contenedor-form">
                    
                    <img src="<?= asset('assets/img/icons/mail-solid.svg') ?>" alt="">
                                    

                    <!-- MODAL QUE SALE CUANDO SE ENVÍA EL FORM CON ÉXITO -->
                    <div id="modal_envio">
                        <!-- nuestro modal con html y css -->
                        <h3 id="h3_modal_envio">Matrix ipsum modal</h3>
                        <p id="p_modal_envio">Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.</p>
                        <div class="boton" id="boton_modal_envio">Escribir otra consulta</div>
                    </div>

                    <form id="idForAjax" action="/app/artForm02" method="post">
                        
                        <p class="error" id="errorForm02"></p>

                        <!-- nombre -->
                        <label for="nombreAjax">Nombre *</label>
                        <input type="text" id="nombreAjax" name="nombre" placeholder="Escribe aquí tu nombre *">

                        <!-- teléfono -->
                        <label for="telefonoAjax">Teléfono *</label>
                        <input type="tel" id="telefonoAjax" name="telefono" placeholder="Escribe aquí tu teléfono *">

                        <!-- Correo -->
                        <label for="emailAjax">Correo Electrónico</label>
                        <input type="email" id="emailAjax" name="email" placeholder="Escribe aquí tu correo electrónico">

                        <!-- Mensaje -->
                        <label for="mensajeAjax">Escribe tu mensaje</label>
                        <textarea name="mensaje" id="mensajeAjax" placeholder="Escribe aquí tu mensaje"></textarea>

                        <!-- términos -->
                        <div class="horizontal">
                        <label for="terminosAjax">Aceptar términos y condiciones de privacidad</label>
                        <input type="checkbox" name="terminos" id="terminosAjax">
                        </div>
                        

                        <!-- captcha -->
                        <label for="respuesta">Resuelve</label>
                        <div class="horizontal">
                        <span id="num1ajax"></span>
                        <span id="operadorajax"></span>
                        <span id="num2ajax"></span>
                        <input type="text" name="respUser" id="respuestaajax" placeholder="Respuesta" autocomplete="off">
                        <input type="hidden" name="respSystem" id="respSystemajax" value="">
                        </div>

                        <input type="hidden" name="url" value="<?= e($url) ?>">
                        <input type="hidden" name="lang" value="<?= e($lang) ?>">

                        <input type="submit" class="boton" value="Enviar" id="botonEnviarAjax">
                    </form>
                    
                    <div class="moduloLoader01" id="moduloLoader01">
                        <!-- <svg version="1.1" id="L2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <circle fill="none" stroke="#000000" stroke-width="4" stroke-miterlimit="10" cx="50" cy="50" r="48"/>
                        <line fill="none" stroke-linecap="round" stroke="#000000" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="85" y2="50.5">
                            <animateTransform 
                                attributeName="transform" 
                                dur="2s"
                                type="rotate"
                                from="0 50 50"
                                to="360 50 50"
                                repeatCount="indefinite" />
                        </line>
                        <line fill="none" stroke-linecap="round" stroke="#000000" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="49.5" y2="74">
                            <animateTransform 
                                attributeName="transform" 
                                dur="15s"
                                type="rotate"
                                from="0 50 50"
                                to="360 50 50"
                                repeatCount="indefinite" />
                        </line>
                        </svg> -->
                        <svg version="1.1" id="L7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <path fill="#000000" d="M31.6,3.5C5.9,13.6-6.6,42.7,3.5,68.4c10.1,25.7,39.2,38.3,64.9,28.1l-3.1-7.9c-21.3,8.4-45.4-2-53.8-23.3
                            c-8.4-21.3,2-45.4,23.3-53.8L31.6,3.5z">
                                <animateTransform 
                                attributeName="transform" 
                                attributeType="XML" 
                                type="rotate"
                                dur="2s" 
                                from="0 50 50"
                                to="360 50 50" 
                                repeatCount="indefinite" />
                            </path>
                        <path fill="#000000" d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                            c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z">
                                <animateTransform 
                                attributeName="transform" 
                                attributeType="XML" 
                                type="rotate"
                                dur="1s" 
                                from="0 50 50"
                                to="-360 50 50" 
                                repeatCount="indefinite" />
                            </path>
                        <path fill="#000000" d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                            L82,35.7z">
                                <animateTransform 
                                attributeName="transform" 
                                attributeType="XML" 
                                type="rotate"
                                dur="2s" 
                                from="0 50 50"
                                to="360 50 50" 
                                repeatCount="indefinite" />
                            </path>
                        </svg>
                    </div>

                    </div>
                    <div class="contenedor-info">
                    <ul>
                        <li>
                        <a href="tel:+34943123123" target="_blank">
                            <img src="<?= asset('assets/img/icons/tel.svg') ?>" alt="" title="">
                            <span>943 123 123</span>
                        </a>
                        </li>
                        <li>
                        <a href="mailto:aranaz@webda.eus" target="_blank">
                            <img src="<?= asset('assets/img/icons/mail-solid.svg') ?>" alt="" title="">
                            <span>aranaz@webda.eus</span>
                        </a>
                        </li>
                        <li>
                        <a href="https://wa.me/628749350" target="_blank">
                            <img src="<?= asset('assets/img/icons/wa.svg') ?>" alt="" title="">
                            <span>628 749 350</span>
                        </a>
                        </li>
                        <li>
                        <a href="https://maps.app.goo.gl/Kh7rZM3WF1chSZSj7" target="_blank">
                            <img src="<?= asset('assets/img/icons/map-pin-solid.svg') ?>" alt="" title="">
                            <span>C/ Juan Fermín, Juan F. Gilisagasti Kalea, 4, 1º, 20018 Donostia / San Sebastián, Gipuzkoa</span>
                        </a>
                        </li>
                    </ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1886.901188915529!2d-2.0047191655624914!3d43.29790730427824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b013f0513629%3A0x57e4ff3311f619d9!2s%C3%81rea%20Escuela%20de%20Dise%C3%B1o%20y%20Nuevas%20Tecnolog%C3%ADas!5e1!3m2!1ses!2ses!4v1768584957042!5m2!1ses!2ses" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </article>
    </section>
    


    </main>
    
    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
