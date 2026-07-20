<?php
// Footer en castellano. Los textos, rutas y datos de contacto se editan aquí
// sin depender de arrays de configuración ni de condiciones de idioma.
?>
<footer class="footer01">
  <div class="footer01__inner">
    <section class="footer01__column" aria-labelledby="footer01-menu-title-es">
      <h3 class="footer01__title" id="footer01-menu-title-es">Navegación</h3>
      <?php
      // Se reutiliza el listado para no mantener dos menús diferentes.
      $idSubmenu = 'footer-servicios-es';
      require app_path('includes/es/enlaces.php');
      ?>
    </section>

    <section class="footer01__column" aria-labelledby="footer01-legal-title-es">
      <h3 class="footer01__title" id="footer01-legal-title-es">Legal</h3>
      <ul class="footer01__list">
        <li><a class="footer01__link" href="/es/legal#aviso-legal">Aviso legal</a></li>
        <li><a class="footer01__link" href="/es/legal#politica-privacidad">Política de privacidad</a></li>
        <li><a class="footer01__link" href="/es/legal#gestion-cookies">Gestión de cookies</a></li>
      </ul>
    </section>

    <section class="footer01__column" aria-labelledby="footer01-contact-title-es">
      <h3 class="footer01__title" id="footer01-contact-title-es">Contacto</h3>
      <address class="footer01__address">
        <a class="footer01__link" href="tel:+34000000000">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/phone.svg') ?>" alt="icono telefono" title="icono telefono">
          <span>+34 943 675 456</span>
        </a>
        <a class="footer01__link" href="mailto:hola@ejemplo.com">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/email.svg') ?>" alt="icono email" title="icono email">
          <span>Katyestudio@gmail.com</span>
        </a>
        <a class="footer01__link" href="https://www.google.com/maps/search/?api=1&query=Calle+Ejemplo+1" target="_blank" rel="noopener noreferrer">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/mapa.svg') ?>" alt="icono google maps" title="icono google maps">
          <span>Ver en Google Maps</span>
        </a>
        <a class="footer01__link" href="https://github.com/tu-usuario" target="_blank" rel="noopener noreferrer" alt="hitHub" title="GitHub">
          <i class="fa-brands fa-github footer01__github"></i>
          <span>GitHub</span>
        </a>
        <p class="footer01__text">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/calle.svg') ?>" alt="icono mapa" title="icono mapa">
          <span>Calle Ejemplo 1, 00000 Ciudad</span>
        </p>
      </address>
    </section>
  </div>

  <div class="footer01__bottom">
    <p>Desarrollado por KatyStudio &copy; <?= date('Y') ?> Todos los derechos reservados.</p>
  </div>
</footer>
