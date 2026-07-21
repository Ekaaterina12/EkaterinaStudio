<?php
// Footer en euskera. Los textos, rutas y datos de contacto se editan aquí
// sin depender de arrays de configuración ni de condiciones de idioma.
?>
<footer class="footer01">
  <div class="footer01__inner">
    <section class="footer01__column" aria-labelledby="footer01-menu-title-eu">
      <h2 class="footer01__title" id="footer01-menu-title-eu">Nabigazioa</h2>
      <?php
      // Se reutiliza el listado para no mantener dos menús diferentes.
      $idSubmenu = 'footer-zerbitzuak-eu';
      require app_path('includes/eu/enlaces.php');
      ?>
    </section>

    <section class="footer01__column" aria-labelledby="footer01-legal-title-eu">
      <h2 class="footer01__title" id="footer01-legal-title-eu">Legezkoa</h2>
      <ul class="footer01__list">
        <li><a class="footer01__link" href="/eu/lege-oharra#aviso-legal">Lege oharra</a></li>
        <li><a class="footer01__link" href="/eu/lege-oharra#politica-privacidad">Pribatutasun politika</a></li>
        <li><a class="footer01__link" href="/eu/lege-oharra#gestion-cookies">Cookieen kudeaketa</a></li>
      </ul>
    </section>

    <section class="footer01__column" aria-labelledby="footer01-contact-title-eu">
      <h2 class="footer01__title" id="footer01-contact-title-eu">Kontaktua</h2>
      <address class="footer01__address">
        <a class="footer01__link" href="tel:+34000000000">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/phone.svg') ?>" alt="Telefono ikonoa" title="Telefono ikonoa">
          <span>+34 943 564 867</span>
        </a>
        <a class="footer01__link" href="mailto:hola@ejemplo.com">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/mail.svg') ?>" alt="Posta elektronikoaren ikonoa" title="Posta elektronikoaren ikonoa">
          <span>KatyStudio@gmail.com</span>
        </a>
        <a class="footer01__link" href="https://www.google.com/maps/search/?api=1&query=Calle+Ejemplo+1" target="_blank" rel="noopener noreferrer">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/map.svg') ?>" alt="Google Maps ikonoa" title="Google Maps ikonoa">
          <span>Ikusi Google Mapsen</span>
        </a>
        <a class="footer01__link" href="https://github.com/tu-usuario" target="_blank" rel="noopener noreferrer" alt="hitHub" title="GitHub">
          <i class="fa-brands fa-github footer01__github"></i>
          <span>GitHub</span>
        </a>
        <p class="footer01__text">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/pin.svg') ?>" alt="Maps ikonoa" title="Maps ikonoa" >
          <span>Calle Ejemplo 1, 00000 Ciudad</span>
        </p>
      </address>
    </section>
  </div>

  <div class="footer01__bottom">
    <p>KatyStudio-ek garatua. &copy; <?= date('Y') ?> Eskubide guztiak erreserbatuta.</p>
  </div>
</footer>
