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
    <?php require app_path('includes/cookielad.php'); ?>
  </head>
  <body>

    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="header02">
        <img class="header02__media" src="<?= asset('assets/img/views/img-iglesia.webp') ?>" alt="Bikote ezkonberria eliza batean egindako argazki-saio batean" title="Bikote ezkonberria eliza batean egindako argazki-saio batean">
            <div class="header02__content">
            
            <h1 class="header02__title">Ezkontza-argazkilaritza eta bideoa Gipuzkoan</h1>
            <p class="header02__text">Gure ezkontza-argazkilaritza eta bideo zerbitzuak zuen istorioa bizi duzuen bezala kontatzeko pentsatuta daude. Zuen eguneko emozio, begirada eta xehetasun bakoitza estilo natural, gertuko eta profesional batekin jasotzen dugu.</p>
            <a href="#hitoForm" class="boton" title="botoia">Jarri gurekin harremanetan</a>
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

    <div class="fantasma" id="hitoForm"></div>

   <?php require app_path('includes/eu/_formularioeu.php'); ?>
    
    </main>








    <?php require app_path('includes/eu/footer.php'); ?>
</body>
</html>
