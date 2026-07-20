<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg.png') ?>">
    <link rel="canonical" href="<?= url('/') ?>">
    <title>Gipuzkoako ezkontza argazkilariak | Katy Studio</title>
    <meta name="description" content="KatyStudio, ezkontza argazkilaritzan espezializatutako estudioa, zure egun handiko une paregabeak eta emozio ahaztezinak jasotzen dituena.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="header01">
      <img class="header01__media" src="<?= asset('assets/img/views/img-blancoynegro.webp') ?>" alt="Bikote-argazki saioa" title="Bikote-argazki saioa">
      <div class="header01__content">
        
        <h1>Gipuzkoako ezkontza-argazkilaria</h1>
        <p class="header01__text">Ezkontzetan espezializatutako argazkilariak, oroitzapen natural eta emozionalak sortuz, zuen egun handia behin eta berriz bizitzeko aukera izan dezazuen.</p>
        <a href=" #formulario" class="boton" title="Kontatu zure istorioa">Kontatu zuen istorioa</a>
      </div>
    </header>

    <main>

    
        <section>
          <!-- Artículo 02 -->
          <article class="art02">

              <div class="textos">
                <h2>Ezkontza-argazkilaritzarekiko pasioa</h2>
                <p>Ezkontzetan espezializatutako argazkilari-taldea gara, bikote bakoitzaren esentzia jasotzeko eta une paregabeak betiko iraungo duten oroitzapen bihurtzeko pasioz lan egiten duguna. Ezkontza-argazkilaritza benetako istorioak kontatzeko modu gisa ulertzen dugu; izan ere, begirada bakoitzak, emozio bakoitzak eta xehetasun txiki bakoitzak esanahi berezia dute.</p>

                  <p>Gure estiloa naturaltasunean eta espontaneotasunean oinarritzen da, une bakoitza gertatzen den bezala islatzea bilatuz, artifiziorik gabe. Bikote bakoitzari gertutasunez eta diskrezioz laguntzen diogu, euren egun handiaz gozatu ahal izan dezaten, gu, berriz, une garrantzitsuenak eta euren istorioa oroitzapen ahaztezin bihurtuko duten emozioak betikotzeaz arduratzen garen bitartean.</p>

                  <!-- <a href="" class="boton">Más info</a> -->
                  <a href="http://localhost:3000/es/quienes-somos" class="moduloBoton02" title="Gehiago jakin">
                      <span>Gehiago jakin</span>
                      <img src="<?= asset('assets/img/icons/arrow-forward-outline.svg') ?>" alt="icon outline" title="icon outline">
                  </a>
              </div>

              <div class="imagenes">
                  <img src="<?= asset('assets/img/views/img-pareja-1.webp') ?>" alt="Bikote ezkonberria argazki-saio batean elkarri musuka" title="Bikote ezkonberria argazki-saio batean elkarri musuka">
                  <img src="<?= asset('assets/img/views/img-coche.webp') ?>" alt="Ezkonberriak auto klasiko baten barruan euren ezkontza egunean" title="Ezkonberriak auto klasiko baten barruan euren ezkontza egunean">
                  <img src="<?= asset('assets/img/views/img-vestido.webp') ?>" alt="Ezkonberriak auto klasiko baten barruan euren ezkontza egunean" title="Ezkonberriak auto klasiko baten barruan euren ezkontza egunean">
              </div>

          </article>

        </section>

        <section>
            <article class="art09">

              <h2>Gure zerbitzuak</h2>

              <div class="art09-content">

                  <div class="contenedor-lista">
                  <h3>Ezkontza-argazkilaritza</h3>
                    <ul>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu ikono" title="zirkulu ikono">
                        <span>Ezkontzaren argazki-estaldura osoa.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu ikono" title="zirkulu ikono">
                        <span>Argazki natural eta espontaneoak.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu ikono" title="zirkulu ikono">
                        <span>Irudien edizio profesionala.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu ikono" title="zirkulu ikono">
                        <span>Online galeria pribatu.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu ikono" title="zirkulu ikono">
                        <span>Bereizmen handiko argazkien aukeraketa.</span>
                        </li>
                    </ul>
                    </div>

                    <div class="contenedor-lista">
                    <h3>Ezkontza-bideoa</h3>
                    <ul>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu ikono" title="zirkulu ikono">
                        <span>Egun osoaren grabazio profesionala.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu ikono" title="zirkulu ikono">
                        <span>Une eta emozio espontaneoen grabaketa.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu ikono" title="zirkulu ikono">
                        <span>Edizio zinematografiko pertsonalizatua.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu ikono" title="zirkulu ikono">
                        <span>Zuen historiara egokitutako musika eta muntaketa.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu ikono" title="zirkulu ikono">
                        <span>Kalitate handiko amaierako bideoa.</span>
                        </li>
                    </ul>
                    </div>

                </div>

            </article>
        </section>

        <section>
            <article class="art11">
              
              <div>
                  <img src="<?= asset('assets/img/views/camara-fotos.webp') ?>" alt="Argazki-kamera profesionala" title="Argazki-kamera profesionala">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-sesion.webp') ?>" alt="Bikotea ezkontza aurreko argazki-saio batean" title="Bikotea ezkontza aurreko argazki-saio batean">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-castillo.webp') ?>" alt="Ezkonberriak gaztelu baten ondoan" title="Ezkonberriak gaztelu baten ondoan">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-barco.webp') ?>" alt="Bikotea itsasontzian nabigatzen" title="Bikotea itsasontzian nabigatzen">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/video-boda.webp') ?>" alt="Ezkonberriak euren ezkontzaren ospakizunean" title="Ezkonberriak euren ezkontzaren ospakizunean">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/sesion-fotos-espejo.webp') ?>" alt="Ezkonberriak ispilu batean islatuta" title="Ezkonberriak ispilu batean islatuta">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-coche.webp') ?>" alt="Bikotea auto klasiko batean" title="Bikotea auto klasiko batean">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/vestido.webp') ?>" alt="Ezkontza-soinekoa zeremoniarako prestatuta" title="Ezkontza-soinekoa zeremoniarako prestatuta">
              </div>

          </article>
        </section>

        <section id="formulario">
            <article class="artForm02">          

                <h2>Jarri gurekin harremanetan</h2>
                    <div>
                        <div class="contenedor-form">
                    
                        <img src="<?= asset('assets/img/icons/mail-solid.svg') ?>" alt="">
                                    

                        <!-- MODAL QUE SALE CUANDO SE ENVÍA EL FORM CON ÉXITO -->
                        <div id="modal_envio">
                            <!-- nuestro modal con html y css -->
                            <h3 id="h3_modal_envio">Mezua behar bezala bidali da!</h3>
                            <p id="p_modal_envio">Zuekin harremanetan jarriko gara ahalik eta azkarren.</p>
                            <div class="boton" id="boton_modal_envio" title="Botoia">Beste kontsulta bat idatzi</div>
                        </div>

                        <form id="idForAjax" action="/app/artForm02" method="post">
                            
                            <p class="error" id="errorForm02"></p>

                            <!-- nombre -->
                            <label for="nombreAjax">Izena *</label>
                            <input type="text" id="nombreAjax" name="nombre" placeholder="Idatzi hemen zure izena *">

                            <!-- teléfono -->
                            <label for="telefonoAjax">Telefonoa *</label>
                            <input type="tel" id="telefonoAjax" name="telefono" placeholder="Idatzi hemen zure telefonoa *">

                            <!-- Correo -->
                            <label for="emailAjax">Posta elektronikoa</label>
                            <input type="email" id="emailAjax" name="email" placeholder="Idatzi hemen zure posta elektronikoa">

                            <!-- Mensaje -->
                            <label for="mensajeAjax">Idatzi zure mezua</label>
                            <textarea name="mensaje" id="mensajeAjax" placeholder="Idatzi hemen zure mezua"></textarea>

                            <!-- términos -->
                            <div class="horizontal">
                            <label for="terminosAjax">Pribatutasunaren baldintzak onartzea</label>
                            <input type="checkbox" name="terminos" id="terminosAjax">
                            </div>
                            

                            <!-- captcha -->
                            <label for="respuesta">Ebatzi</label>
                            <div class="horizontal">
                            <span id="num1ajax"></span>
                            <span id="operadorajax"></span>
                            <span id="num2ajax"></span>
                            <input type="text" name="respUser" id="respuestaajax" placeholder="Erantzuna" autocomplete="off">
                            <input type="hidden" name="respSystem" id="respSystemajax" value="">
                            </div>

                            <input type="hidden" name="url" value="<?= e($url) ?>">
                            <input type="hidden" name="lang" value="<?= e($lang) ?>">

                            <input type="submit" class="boton" value="Bidali" id="botonEnviarAjax">
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
                                <img src="<?= asset('assets/img/icons/tel.svg') ?>" alt="Telefono ikonoa" title="Telefono ikonoa">
                                <span>943 123 123</span>
                            </a>
                            </li>
                            <li>
                            <a href="mailto:aranaz@webda.eus" target="_blank">
                                <img src="<?= asset('assets/img/icons/mail-solid.svg') ?>" alt="ikonoa email" title="ikonoa email">
                                <span>KatyStudio@gmail.com</span>
                            </a>
                            </li>
                            <li>
                            <a href="https://wa.me/628749350" target="_blank">
                                <img src="<?= asset('assets/img/icons/wa.svg') ?>" alt="Telefono ikonoa" title="Telefono ikonoa">
                                <span>628 456 350</span>
                            </a>
                            </li>
                            <li>
                            <a href="https://maps.app.goo.gl/Kh7rZM3WF1chSZSj7" target="_blank">
                                <img src="<?= asset('assets/img/icons/map-pin-solid.svg') ?>" alt="maps ikonoa" title="maps ikonoa">
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

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>
