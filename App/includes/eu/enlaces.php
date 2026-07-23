<?php
// Castellanoko menuaren bertsio bera, baina euskarazko ibilbide homologoekin.
// Ibilbide berria sortzen bada, haren href-ak App/config/config.php-ko bideekin
// bat etorri behar du.
?>
<ul class="enlaces01">
  <li class="enlaces01__item">
    <a class="enlaces01__link" href="<?= url('/eu') ?>">
      <span>Hasiera</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="<?= url('/eu/kontaktua') ?>">
      <span>Kontaktua</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="<?= url('/eu/nortzuk-gara') ?>">
      <span>Nortzuk gara</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="<?= url('/showroom') ?>">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/grid.svg') ?>" alt="">
      <span>Showroom</span>
    </a>
  </li>
</ul>
