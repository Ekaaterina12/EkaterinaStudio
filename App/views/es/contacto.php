<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/contacto') ?>">
    <title>Fotógrafos de bodas en Guipúzcoa | Contacta con nosotros</title>
    <meta name="description" content="Contacta con nosotros">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
</head>
<body>
    <?php require app_path('includes/es/nav.php'); ?>

    <header class="header02">
        <img class="header02__media" src="<?= asset('assets/img/views/img-anillos.webp') ?>" alt="Sesion de fotos de anillos">
            <div class="header02__content">
            
            <h1 class="header02__title">Contacto fotógrafo de bodas en Guipúzcoa</h1>
            <p class="header02__text">Si queréis conocer más detalles sobre nuestros servicios de fotografía y vídeo de bodas en Guipúzcoa, estaremos encantados de atenderos.</p>
            <a href="#formulario" class="boton">Contactanos</a> 
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
            <a href="http://localhost:3000/es/servicios" class="boton">Ver todos los servicios</a>
        </article>

    </section>

    
    <section id="section5">


        <h2 data-lang="encabezado">Trabajos realizados</h2>

            <article class="artGrid">
            <div>
                <img src="<?= asset('assets/img/views/img-anillos.webp') ?>" alt="Anillos de boda durante una sesión fotográfica">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/img2.webp') ?>" alt="Pareja de novios durante una sesión de fotos">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/img-vestido.webp') ?>" alt="Vestido de novia preparado para la sesión fotográfica">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/img-blancoynegro2.webp') ?>" alt="Pareja de novios en una fotografía en blanco y negro">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/camara-fotos.webp') ?>" alt="Cámara fotográfica profesional">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/img-sesion.webp') ?>" alt="Pareja durante una sesión fotográfica de boda">
            </div>
            </article>

       
      </section>
    

    

    <section id="formulario">
        <article class="artForm02">          

            <h2>Contacta con nosotros</h2>
                <div>
                    <div class="contenedor-form">
                    
                    <img src="<?= asset('assets/img/icons/mail-solid.svg') ?>" alt="">
                                    

                    <!-- MODAL QUE SALE CUANDO SE ENVÍA EL FORM CON ÉXITO -->
                    <div id="modal_envio">
                        <!-- nuestro modal con html y css -->
                        <h3 id="h3_modal_envio">¡Mensaje enviado correctamente!</h3>
                        <p id="p_modal_envio">Nos pondremos en contacto con vosotros lo antes posible.</p>
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
                            <span>KatyStudio@gmail.com</span>
                        </a>
                        </li>
                        <li>
                        <a href="https://wa.me/628749350" target="_blank">
                            <img src="<?= asset('assets/img/icons/wa.svg') ?>" alt="" title="">
                            <span>628 456 350</span>
                        </a>
                        </li>
                        <li>
                        <a href="https://maps.app.goo.gl/Kh7rZM3WF1chSZSj7" target="_blank">
                            <img src="<?= asset('assets/img/icons/map-pin-solid.svg') ?>" alt="" title="">
                            <span>20018 Donostia / San Sebastián, Gipuzkoa</span>
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
