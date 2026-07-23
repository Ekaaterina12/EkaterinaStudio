<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <title>Pagina no encontrada</title>
    <meta name="description" content="La pagina solicitada no existe o ha cambiado de direccion.">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <section class="error-404">
      <h1>Error 404</h1>
      <h2>Página no encontrada</h2>

      <p>
        Lo sentimos, la página legal que estás buscando no existe, ha sido
        movida o la dirección introducida es incorrecta.
      </p>

      <p>
        Puedes volver a la página anterior, acceder a la página de inicio o
        consultar nuestras secciones legales desde el menú principal.
      </p>

      <p>
        Si crees que se trata de un error o necesitas acceder a un documento
        legal específico, ponte en contacto con nosotros y estaremos encantados
        de ayudarte.
      </p>

      <a href="/" class="boton">Volver al inicio</a>
    </section>

    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
