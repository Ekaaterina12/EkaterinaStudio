<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/kontaktua') ?>">
    <title>Contacta con nuestra panaderia</title>
    <meta name="description" content="Contacta con nuestra panaderia para consultas, pedidos y encargos de panaderia y pasteleria.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
</head>
<body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="header02">
        <img class="header02__media" src="<?= asset('assets/img/views/img-anillos.webp') ?>" alt="Eraztunen argazki-saioa">
            <div class="header02__content">
            
            <h1 class="header02__title">Gipuzkoako ezkontza-argazkilariaren kontaktua</h1>
            <p class="header02__text">Gipuzkoako ezkontza-argazkilaritza eta bideo zerbitzuei buruzko xehetasun gehiago ezagutu nahi badituzue, pozik egongo gara zuei erantzuten.</p>
            <a href="#formulario" class="boton">Jarri gurekin harremanetan</a> 
        </div>
    </header>

    <main>

    <section>
        <article class="art12">
            <h2>Gure lan-prozesua</h2>
            <p class="espacial">Badakigu ezkontza bat antolatzeak xehetasun asko zaintzea eskatzen duela; horregatik, lan egiteko modu erraz, gertuko eta profesional bat sortu dugu. Gure helburua prozesu osoan zehar zuekin batera egotea da, lasaitasuna izan dezazuen, une garrantzitsu bakoitza ahalik eta modurik onenean jasota geratuko dela jakinda.</p>
        
              <div>
                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-sesion.webp') ?>" alt="Bikotea argazki-saio batean" title="Bikotea argazki-saio batean">
                  <div>
                      <h3>1. Lehen harremana eta bilera</h3>
                      <p>Dena elkarrizketa batekin hasten da. Zuek ezagutzea nahi dugu, zuen ezkontza nola irudikatzen duzuen jakitea eta zuentzat garrantzitsuak diren uneak ulertzea.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-castillo.webp') ?>" alt="Ezkonberriak gaztelu baten aurrean" title="Ezkonberriak gaztelu baten aurrean">
                  <div>
                      <h3>2. Data erreserbatzea</h3>
                      <p>Behin gurekin kontatzea erabakitzen duzuenean, zuen ezkontzaren erreserba formalizatzen dugu, egun horretan gure eskuragarritasuna bermatzeko.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-beso.webp') ?>" alt="Ezkonberriak zeremonian zehar musukatzen" title="Ezkonberriak zeremonian zehar elkarri musuka">
                  <div>
                      <h3>3. Plangintza pertsonalizatua</h3>
                      <p>Ezkontza bakoitza desberdina da; horregatik, eguneko xehetasun guztiak ezagutzeko denbora eskaintzen dugu.</p>
                      <p>Ordutegiez, une garrantzitsuez, ospakizunaren antolaketaz eta emaitza osatuago eta naturalago bat lortzen lagun diezagukeen edozein alderdiz hitz egiten dugu.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-pareja-1.webp') ?>" alt="Bikotea argazki-saio batez gozatzen" title="Bikotea argazki-saio batez gozatzen">
                  <div>
                      <h3>4. Ezkontza eguna</h3>
                      <p>Zuen ezkontzako une bakoitza modu diskretu eta profesionalean jasotzeko prest iristen gara.</p>
                      <p>Emozioak, begiradak, besarkadak eta askotan oharkabean pasatzen diren une txiki horiek guztiak dokumentatzeaz arduratzen gara.</p>
                  </div>
                  </div>

                <div class="ficha">
                  <img src="<?= asset('assets/img/views/img-barco.webp') ?>" alt="Ezkonberriak itsasontzian nabigatzen argazki-saioan" title="Ezkonberriak itsasontzian nabigatzen argazki-saioan">
                  <div>
                      <h3>5. Erreportajearen entrega</h3>
                      <p>Azkenik, zuen ezkontza-erreportajea jasoko duzue, merezi duen arreta eta zaintza guztiarekin prestatuta.</p>
                      <p>Urteak igaro ahala berriro emozionatzeko eta zuen bizitzako egun garrantzitsuenetako baten une bakoitza berriz bizitzeko sortutako oroitzapena.</p>
                  </div>
                  </div>
              </div>
          </article>
    </section>

    <section>
        <!-- artículo 05 -->
        <article class="art05">
            <h2>Zuen ezkontzaz hitz egiten dugu?</h2>
            <p class="espacial">Gure taldea pozik egongo da zuen istorioa entzuteko, zuen egun handia nola irudikatzen duzuen ezagutzeko eta izan ditzakezuen zalantza guztiak argitzeko. Konta iezaguzue zuen proposamena, ezkontzaren data eta zuen eguna berezia egiten duten xehetasun guzti horiek. Zuekin harremanetan jarriko gara eskuragarritasuna egiaztatzeko eta elkarrekin oroitzapen ahaztezin bat prestatzen hasteko.</p>
            <p class="espacial">Uste dugu konfiantza eta gertutasuna funtsezkoak direla erreportaje benetako bat lortzeko; horregatik, lehen unetik ezagutu nahi zaituztegu eta prozesu osoan zehar zuekin batera egon. Zuen bizitzako egun garrantzitsuenetako baten parte izateko eta une bakoitza betiko iraungo duen oroitzapen bihurtzeko gogotsu gaude.</p>
            <a href="http://localhost:3000/es/servicios" class="boton">Zerbitzu guztiak ikusi</a>
        </article>

    </section>

    
    <section id="section5">


        <h2 data-lang="encabezado">Egindako lanak</h2>

            <article class="artGrid">
            <div>
                <img src="<?= asset('assets/img/views/img-anillos.webp') ?>" alt="Ezkontza-eraztunak argazki-saio batean">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/img2.webp') ?>" alt="Bikote ezkonberria argazki-saio batean">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/img-vestido.webp') ?>" alt="Ezkontza-soinekoa argazki-saiorako prestatuta">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/img-blancoynegro2.webp') ?>" alt="Bikote ezkonberria zuri-beltzeko argazki batean">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/camara-fotos.webp') ?>" alt="Argazki-kamera profesionala">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/img-sesion.webp') ?>" alt="Bikotea ezkontza-argazki saio batean">
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

    <?php require app_path('includes/eu/footer.php'); ?>
</body>
</html>
