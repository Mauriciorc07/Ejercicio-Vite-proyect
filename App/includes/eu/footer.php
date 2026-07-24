<?php
// Footer en euskera. Los textos y rutas se adaptan sin cambiar la estructura.
?>
<footer class="footer01">
  <div class="footer01__inner">
    <section class="footer01__column" aria-labelledby="footer01-menu-title-eu">
      <h2 class="footer01__title" id="footer01-menu-title-eu">Nabigazioa</h2>
      <?php
      // Zerrenda bera berrerabiltzen da menu desberdinak mantendu gabe.
      $idSubmenu = 'footer-zerbitzuak-eu';
      require app_path('includes/eu/enlaces.php');
      ?>
    </section>

    <section class="footer01__column" aria-labelledby="footer01-legal-title-eu">
      <h2 class="footer01__title" id="footer01-legal-title-eu">Legezkoa</h2>
      <ul class="footer01__list">
        <li><a class="footer01__link" href="<?= url('/eu/lege-oharra#aviso-legal') ?>">Lege oharra</a></li>
        <li><a class="footer01__link" href="<?= url('/eu/lege-oharra#politica-privacidad') ?>">Pribatutasun politika</a></li>
        <li><a class="footer01__link" href="<?= url('/eu/lege-oharra#gestion-cookies') ?>">Cookieen kudeaketa</a></li>
      </ul>
    </section>

    <section class="footer01__column" aria-labelledby="footer01-contact-title-eu">
      <h2 class="footer01__title" id="footer01-contact-title-eu">Kontaktua</h2>
      <address class="footer01__address">
        <a class="footer01__link" href="tel:+34602051460">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/phone.svg') ?>" alt="">
          <span>+34 602 05 1460</span>
        </a>
        <a class="footer01__link" href="mailto:mauricio.tech12@gmail.com">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/mail.svg') ?>" alt="">
          <span>mauricio.tech12@gmail.com</span>
        </a>
        <p class="footer01__text">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/pin.svg') ?>" alt="">
          <span>20012 Donostia / San Sebastián, Gipuzkoa</span>
        </p>
      </address>
    </section>
  </div>

  <div class="footer01__bottom">
    <p>Mauricio Mahecha-k garatua. &copy; <?= date('Y') ?> Eskubide guztiak erreserbatuta.</p>
  </div>
</footer>
