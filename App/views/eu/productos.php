<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg.png') ?>">
    <link rel="canonical" href="<?= url('/zerbitzuak') ?>">
    <title>Gipuzkoako ezkontza argazkilariak | Gure zerbitzuak</title>
    <meta name="description" content="Gipuzkoako ezkontza argazkilaritza eta bideo zerbitzuak. KatyStudion erreportaje natural, hunkigarri eta pertsonalizatuak sortzen ditugu, une berezi bakoitza gordetzeko.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>

    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="header02">
        <img class="header02__media" src="<?= asset('assets/img/views/img-iglesia.webp') ?>" alt="Bikote ezkonberria eliza batean egindako argazki-saio batean" title="Bikote ezkonberria eliza batean egindako argazki-saio batean">
            <div class="header02__content">
            
            <h1 class="header02__title">Ezkontza-argazkilaritza eta bideoa Gipuzkoan</h1>
            <p class="header02__text">Gure ezkontza-argazkilaritza eta bideo zerbitzuak zuen istorioa bizi duzuen bezala kontatzeko pentsatuta daude. Zuen eguneko emozio, begirada eta xehetasun bakoitza estilo natural, gertuko eta profesional batekin jasotzen dugu.</p>
            <a href="#formulario" class="boton" title="botoia">Jarri gurekin harremanetan</a>
        </div>
    </header>

    <main>

    <section>
      <article class="art12">
        <h2>Zuen argazki-erreportajearen prozesua</h2>
            <p class="espacial">Gure ezkontza-argazkilaritza zerbitzua eguneko etapa bakoitza estilo natural, dotore eta pertsonalizatu batekin jasotzeko pentsatuta dago. Prestaketetatik hasi eta azken ospakizunera arte, zuen istorioa berezia egiten duten emozio, begirada eta xehetasun txiki bakoitza betikotzeaz arduratzen gara. Modu gertuko eta diskretuan lan egiten dugu, irudi autentikoak sortzeko; sentikortasunez beteak eta zuen bizitzako egun garrantzitsuenetako baten esentzia transmititzeko gai direnak.</p>
              <div>
                <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-pareja-1.webp') ?>" alt="Bikote ezkonberria argazki-saio batean" title="Bikote ezkonberria argazki-saio batean">
                  <div>
                      <h3>Prestaketak</h3>
                      <p>Lehenengo urduritasunak, irribarreek, soinekoaren xehetasunek, azken ukituek eta senide eta lagunekin partekatutako uneek zeremoniaren aurretik hasten den istorio baten parte dira.</p>
                      <p>Une intimo eta espontaneo horiek jasotzen ditugu, ezkontza bakoitza desberdin egiten dutenak.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/sesion-pareja-iglesia.webp') ?>" alt="Ezkonberriak ezkontza-zeremonian" title="Ezkonberriak ezkontza-zeremonian">
                  <div>
                      <h3>Zeremonia</h3>
                      <p>Zeremonia zuen eguneko unerik garrantzitsuenetako bat da. Une berezi horretako oroitzapen guztiak gordetzeko, emozio, keinu eta begirada bakoitza jasotzen dugu.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-mesa.webp') ?>" alt="Ezkontza ospakizunerako prestatutako mahaia" title="Ezkontza ospakizunerako prestatutako mahaia">
                  <div>
                      <h3>Otordua</h3>
                      <p>Ospakizuna, topa egiteak, algarak eta gonbidatuekin partekatutako uneek ezkontza-erreportajearen funtsezko parte dira.</p>
                      <p>Xehetasun bakoitza argazkitan jasotzen dugu, zuen eguneko poza berriro bizitzeko aukera izan dezazuen.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-castillo.webp') ?>" alt="Bikote ezkonberria gaztelu batean egindako argazki-saio batean" title="Bikote ezkonberria gaztelu batean egindako argazki-saio batean">
                  <div>
                      <h3>Bikote-saioa</h3>
                      <p>Giro lasai bat sortzen dugu elkarrekin gozatzeko eta bikote gisa duzuen lotura islatzen duten argazki naturalak lortzeko.</p>
                      <p>Irudi autentikoak bilatzen ditugu, behartutako poseetatik urrun, non zuen nortasuna protagonista den.</p>
                  </div>
                  </div>
              </div>
          </article>
    </section>

    <section>
        <!-- artículo 09 -->
          <article class="art09">

              <h2>Gure ezkontza-paketeak</h2>

              <div class="art09-content">

                  <div class="contenedor-lista">
                  <h3>Argazki-saioa</h3>
                  <ul>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Prestaketetatik ospakizunera arteko estaldura.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Eguneko argazki-erreportaje osoa.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Une garrantzitsuenen eta xehetasun txikienen argazki-kaptura.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Argazkiak bereizmen handian entregatzea.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Ezkontza-albuma eta inprimatutako kopiak (aukeran).</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Guztizko prezioa: 3.450 €</span>
                      </li>
                  </ul>
                  </div>

                  <div class="contenedor-lista">
                  <h3>Bideo-zerbitzua</h3>
                  <ul>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Ezkontzaren estaldura osoa.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Bideo zinematografiko eta naturala.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Edizio profesionala.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Une onenen trailerra.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Ezkontzaren film osoa.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Kalitate handiko entrega digitala.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Guztizko prezioa: 4.030 €</span>
                      </li>
                  </ul>
                  </div>

                    <div class="contenedor-lista">
                        <h3>Sesión de fotografía + vídeo</h3>
                    <ul>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Argazki eta bideo estaldura osoa.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Une bakoitza angelu guztietatik jasota.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Argazki-erreportajea eta bideo zinematografikoa.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Argazkien eta bideoaren edizio profesionala.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Online galeria pribatua eta bereizmen handiko entrega digitala.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="zirkulu emojia" title="zirkulu emojia">
                      <span>Guztizko prezioa: 6.590 €</span>
                      </li>
                  </ul>
                  </div>


              </div>

          </article>
    </section>

    <section>
      <article class="art12">
        <h2>Zuen ezkontza-bideoa sortzeko prozesua</h2>
            <p class="espacial">Bideo batek ahotsak berriro entzutea, emozioak sentitzea eta une bakoitza modu paregabean bizitzea ahalbidetzen du. Xehetasun txikiak, begiradak, irribarreak eta ospakizun bakoitza desberdin egiten duten une espontaneoak jasotzen ditugu. Edizio zaindu baten eta narrazio zinematografiko baten bidez, gertatutakoa erakusteaz gain, egun berezi hartan bizitako sentipenak transmititzen dituen oroitzapena sortzen dugu.</p>
            <p class="espacial">Ezkontza-bideo pertsonalizatuak sortzen ditugu, bai grabazioa bai azken edizioa zainduz. Istorio bakoitza bakarra denez, begirada hurbil eta profesional batekin lan egiten dugu zuen eguneko unerik garrantzitsuenak jasotzeko.</p>
              <div>
                <div class="ficha">
                  <img src="<?= asset('assets/img/views/sesion-boda.webp') ?>" alt="Grabazioan lanean ari den taldea." title="Grabazioan lanean ari den taldea.">
                  <div>
                      <h3>Grabazioa.</h3>
                      <p>Ezkontzako unerik garrantzitsuenak errealizazio profesional batekin jasotzen ditugu, une handiei zein xehetasun txikiei arreta eskainiz.</p>
                      
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/sesion-fotos-espejo.webp') ?>" alt="Soinekoaren eta osagarrien argazki-saioa." title="Soinekoaren eta osagarrien argazki-saioa.">
                  <div>
                      <h3>Edizioa</h3>
                      <p>Edizioa funtsezko atala da grabatutako irudi guztiak erritmoa, emozioa eta nortasuna dituen ikus-entzunezko istorio bihurtzeko.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/dron-boda.webp') ?>" alt="Droneak ezkontza batean aireko irudiak grabatzen." title="Droneak ezkontza batean aireko irudiak grabatzen.">
                  <div>
                      <h3>Dronea</h3>
                      <p>Aireko grabazioak ospakizun-lekuaren ikuspegi desberdin bat erakusteko aukera ematen du, eta azken bideoari irudi ikusgarriak gehitzeko.</p>
                      
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/video-boda.webp') ?>" alt="Ezkontzaren trailerra" title="Ezkontzaren trailerra">
                  <div>
                      <h3>Trailerra</h3>
                      <p>Ezkontzaren funtsa laburbiltzen duten pieza labur eta zirraragarriak sortzen ditugu, eta une onenak partekatzeko aukera ematen dizuetenak.</p>
                      
                  </div>
                  </div>
              </div>
          </article>
    </section>

    
    <section id="section5">
        

        <article class="artGrid">
          <div>
            <img src="<?= asset('assets/img/views/img-castillo.webp') ?>" alt="Gazte bikotea gaztelu batean egindako argazki-saio batean." title="Gazte bikotea gaztelu batean egindako argazki-saio batean.">
          </div>
          <div>
            <img src="<?= asset('assets/img/views/img-coche.webp') ?>" alt="Ezkonberrien bikotea auto batean egindako argazki-saio batean." title="Ezkonberrien bikotea auto batean egindako argazki-saio batean.">
          </div>
          <div>
            <img src="<?= asset('assets/img/views/vestido.webp') ?>" alt="Ezkontza-soinekoaren xehetasunak argazki-saio batean." title="Ezkontza-soinekoaren xehetasunak argazki-saio batean.">
          </div>
          <div>
            <img src="<?= asset('assets/img/views/img-playa-novia.webp') ?>" alt="Emaztegaia hondartzan paseatzen argazki-saio batean." title="Emaztegaia hondartzan paseatzen argazki-saio batean.">
          </div>
          <div>
            <img src="<?= asset('assets/img/views/video-boda.webp') ?>" alt="Ezkonbikoteen ospakizuneko ezkontza-bideoa." title="Ezkonbikoteen ospakizuneko ezkontza-bideoa.">
          </div>
          <div>
            <img src="<?= asset('assets/img/views/img-pareja-andando.webp') ?>" alt="Ezkonbikotea argazki-saio batean paseatzen." title="Ezkonbikotea argazki-saio batean paseatzen.">
          </div>
        </article>

    </section>

   <section id="formulario">
        <article class="artForm02">          

            <h2>Jarri gurekin harremanetan</h2>
                <div>
                    <div class="contenedor-form">
                    
                    <img src="<?= asset('assets/img/icons/mail-solid.svg') ?>" alt="ikonoa" alta="ikonoa">
                                    

                    <!-- MODAL QUE SALE CUANDO SE ENVÍA EL FORM CON ÉXITO -->
                    <div id="modal_envio">
                        <!-- nuestro modal con html y css -->
                        <h3 id="h3_modal_envio">Mezua behar bezala bidali da!</h3>
                        <p id="p_modal_envio">Zuekin harremanetan jarriko gara ahalik eta azkarren.</p>
                        <div class="boton" id="boton_modal_envio">Beste kontsulta bat idatzi</div>
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
