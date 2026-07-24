<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg.png') ?>">
    <link rel="canonical" href="<?= url('/nortzuk-gara') ?>">
    <title>Gipuzkoako ezkontza argazkilariak | Nor gara</title>
    <meta name="description" content="KatyStudio, Gipuzkoako ezkontza argazkilariak, argazkilaritza natural eta emozionalean espezializatuak. Ezagutu gure taldea eta istorio paregabeak kontatzeko dugun modua.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
    <?php require app_path('includes/cookielad.php'); ?>
  </head>
  <body>

    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="header02">
        <img class="header02__media" src="<?= asset('assets/img/views/img2.webp') ?>" alt="Bikote saioa" title="Bikote saioa">
        <div class="header02__content">
          <h1 class="header02__title">Nor gara</h1>
          <p class="header02__text">Argazkilaritzan eta ezkontzetako bideoan aritzen gara, gertutasunean, naturaltasunean eta xehetasun bakoitza zaintzean oinarritutako filosofia batekin.</p>
          <a href="#hitoForm" class="boton" title="Botoia">Jarri gurekin harremanetan</a>
        </div>
      </header>

    <main>

      <section>
          <!-- artículo 05 -->
        <article class="art05">
            <h2>Gure esperientzia</h2>
            
            <p class= "espacial">Gure ezkontzetako esperientziari esker, une bakoitzaren garrantzia ulertzen dugu eta ospakizun bakoitzaren erritmora egokitzen gara.</p>
            <p class="espacial">Diskrezioz eta profesionaltasunez lan egiten dugu, zuek zuen egunaz gozatu ahal izateko, gu emozio bakoitza jasotzeaz arduratzen garen bitartean: begiradak, irribarreak, besarkadak eta zuen ezkontza berezi egiten duten xehetasun txiki guztiak.</p>
            <p class="espacial">Gipuzkoan eta Euskal Herriko hainbat tokitan egiten ditugu ezkontza-erreportajeak, bikote bakoitzak aukeratutako lekura joanez, haien istorioa kontatzeko.
              Inguruneak duen garrantzia ezagutzen dugu, eta espazio bakoitza aprobetxatzen dugu irudi paregabeak sortzeko, eszenatokien edertasuna argazkilaritza zaindu eta emozional batekin uztartuz.
            </p>
            
            <a href="#formulario" class="boton" title="Botoia">Idatz iezaguzu</a>
        </article>
      </section>

      <section>
          <!-- Artículo 11 -->
        <h2>Kontatu ditugun istorioak</h2>
            <article class="art11">

              
              <div>
                  <img src="<?= asset('assets/img/views/img-beso.webp') ?>" alt="Bikote ezkonberria elkarri musuka argazki-saio batean" title="Bikote ezkonberria elkarri musuka argazki-saio batean">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-playa-novia.webp') ?>" alt="Emaztegaia hondartzako argazki-saio batean" title="Emaztegaia hondartzako argazki-saio batean">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-castillo.webp') ?>" alt="Bikote ezkonberria gaztelu bateko argazki-saio batean" title="Bikote ezkonberria gaztelu bateko argazki-saio batean">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-pareja-1.webp') ?>" alt="Bikote ezkonberria argazki-saio batean" title="Bikote ezkonberria argazki-saio batean">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-barco.webp') ?>" alt="Bikote ezkonberria itsasontzi bateko argazki-saio batean" title="Bikote ezkonberria itsasontzi bateko argazki-saio batean">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img-coche.webp') ?>" alt="Bikote ezkonberria auto baten barruan argazki-saioan zehar" title="Bikote ezkonberria auto baten barruan argazki-saioan zehar">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/img2.webp') ?>" alt="Emaztegaiaren lore-sorta argazki-saio batean" title="Emaztegaiaren lore-sorta argazki-saio batean">
              </div>

              <div>
                  <img src="<?= asset('assets/img/views/vestido.webp') ?>" alt="Emaztegaia bere soinekoaren xehetasunak erakusten argazki-saioan" title="Emaztegaia bere soinekoaren xehetasunak erakusten argazki-saioan">
              </div>

          </article>
      </section>

      <div class="fantasma" id="hitoForm"></div>

      <?php require app_path('includes/eu/_formularioeu.php'); ?>

    </main>

    

    <?php require app_path('includes/eu/footer.php'); ?>
</body>
</html>
