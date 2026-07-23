<?php
// Listado compartido por el nav y el footer en castellano. Si se crea una
// página nueva, su href debe coincidir con una ruta de App/config/config.php.
// $idSubmenu llega desde nav.php o footer.php para evitar IDs HTML duplicados.
?>
<ul class="enlaces01">
  <li class="enlaces01__item">
    <a class="enlaces01__link" href="<?= url('/es') ?>">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/home2.svg') ?>" alt="icono home" title="icono home">
      <span>Inicio</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="<?= url('/es/contacto') ?>">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/email.svg') ?>" alt="icono email" title="icono email">
      <span>Contacto</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="<?= url('/es/quienes-somos') ?>">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/team-outlined.svg') ?>" alt="icono gente" title="icono gente">
      <span>Quiénes somos</span>
    </a>
  </li>

  <!-- Este item contiene un segundo nivel de navegación. -->
  <li class="enlaces01__item enlaces01__item--hasSubmenu" data-nav01-submenu-item>
    <div class="enlaces01__submenuHeader">
      <a class="enlaces01__link enlaces01__link--parent" href="<?= url('/es/servicios') ?>">
        <img class="enlaces01__icon" src="<?= asset('assets/img/icons/design-services-outline.svg') ?>" alt="icono servicios" title="icono servicios">
        <span>Nuestros servicios</span>
      </a>
      <!-- <button class="enlaces01__submenuToggle" type="button" aria-controls="<?= e($idSubmenu) ?>" aria-expanded="false" aria-label="Abrir submenú Servicios" data-nav01-submenu-toggle data-nav01-label-open="Abrir submenú" data-nav01-label-close="Cerrar submenú" data-nav01-submenu-label="Servicios">
        <img class="enlaces01__chevron" src="<?= asset('assets/img/icons/chevron.svg') ?>" alt="">
      </button> -->
    </div>

  </li>
<!-- //para quitar el showroom -->
  <!-- <li class="enlaces01__item">
    <a class="enlaces01__link" href="<?= url('/showroom') ?>">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/grid.svg') ?>" alt="">
      <span>Showroom</span>
    </a>
  </li> -->
</ul>

