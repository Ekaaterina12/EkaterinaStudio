<?php
// Listado compartido por el nav y el footer en euskera. Si se crea una página
// nueva, su href debe coincidir con una ruta de App/config/config.php.
// $idSubmenu llega desde nav.php o footer.php para evitar IDs HTML duplicados.
?>
<ul class="enlaces01">
  <li class="enlaces01__item">
    <a class="enlaces01__link" href="<?= url('/eu') ?>">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/home2.svg') ?>" alt="Etxe ikonoa" title="Etxe ikonoa">
      <span>Hasiera</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="<?= url('/eu/kontaktua') ?>">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/email.svg') ?>" alt="Kontakturako ikonoa" title="Kontakturako ikonoa">
      <span>Kontaktua</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="<?= url('/eu/nortzuk-gara') ?>">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/team-outlined.svg') ?>" alt="Nortzuk gara ikonoa" title="Nortzuk gara">
      <span>Nortzuk gara</span>
    </a>
  </li>

  <!-- Este item contiene un segundo nivel de navegación. -->
  <li class="enlaces01__item enlaces01__item--hasSubmenu" data-nav01-submenu-item>
    <div class="enlaces01__submenuHeader">
      <a class="enlaces01__link enlaces01__link--parent" href="<?= url('/eu/zerbitzuak') ?>">
        <img class="enlaces01__icon" src="<?= asset('assets/img/icons/design-services-outline.svg') ?>" alt="Zerbitzuak ikonoa" title="Zerbitzuak ikonoa">
        <span>Zerbitzuak</span>
      </a>
      
    </div>


  <!-- <li class="enlaces01__item">
    <a class="enlaces01__link" href="<?= url('/showroom') ?>">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/grid.svg') ?>" alt="">
      <span>Showroom</span>
    </a>
  </li> -->
</ul>
