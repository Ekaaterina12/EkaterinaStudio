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
    <?php require app_path('includes/cookielad.php'); ?>
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

        <?php require app_path('includes/eu/_formularioeu.php'); ?>
        

    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>
