<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg.png') ?>">
    <link rel="canonical" href="<?= url('/kontaktua') ?>">
    <title>Gipuzkoako ezkontza argazkilariak | Jarri gurekin harremanetan</title>
    <meta name="description" content="Jarri harremanetan KatyStudiorenkin, Gipuzkoako ezkontza argazkilariekin. Konta iezaguzue zuen istorioa eta eskatu informazioa gure argazkilaritza zerbitzuei buruz.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
    <?php require app_path('includes/cookielad.php'); ?>
</head>
<body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="header02">
        <img class="header02__media" src="<?= asset('assets/img/views/img-anillos.webp') ?>" alt="Eraztunen argazki-saioa" title="Eraztunen argazki-saioa">
            <div class="header02__content">
            
            <h1 class="header02__title">Gipuzkoako ezkontza-argazkilariaren kontaktua</h1>
            <p class="header02__text">Gipuzkoako ezkontza-argazkilaritza eta bideo zerbitzuei buruzko xehetasun gehiago ezagutu nahi badituzue, pozik egongo gara zuei erantzuten.</p>
            <a href="#formulario" class="boton" title="Botoia">Jarri gurekin harremanetan</a> 
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
            <a href="http://localhost:3000/es/servicios" class="boton" title="Botoia">Zerbitzu guztiak ikusi</a>
        </article>

    </section>

    
    <section id="section5">


        <h2 data-lang="encabezado">Egindako lanak</h2>

            <article class="artGrid">
            <div>
                <img src="<?= asset('assets/img/views/img-anillos.webp') ?>" alt="Ezkontza-eraztunak argazki-saio batean" title="Ezkontza-eraztunak argazki-saio batean">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/img2.webp') ?>" alt="Bikote ezkonberria argazki-saio batean" title="Bikote ezkonberria argazki-saio batean">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/img-vestido.webp') ?>" alt="Ezkontza-soinekoa argazki-saiorako prestatuta" title="Ezkontza-soinekoa argazki-saiorako prestatuta">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/img-blancoynegro2.webp') ?>" alt="Bikote ezkonberria zuri-beltzeko argazki batean" title="Bikote ezkonberria zuri-beltzeko argazki batean">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/camara-fotos.webp') ?>" alt="Argazki-kamera profesionala" title="Argazki-kamera profesionala">
            </div>
            <div>
                <img src="<?= asset('assets/img/views/img-sesion.webp') ?>" alt="Bikotea ezkontza-argazki saio batean" title="Bikotea ezkontza-argazki saio batean">
            </div>
            </article>

       
    </section>
    

    <?php require app_path('includes/eu/_formularioeu.php'); ?>

    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
</body>
</html>
