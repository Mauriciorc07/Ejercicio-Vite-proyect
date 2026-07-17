<?php
// Nav en castellano. Las rutas se escriben aquí de forma explícita para que
// el alumno pueda relacionar fácilmente cada enlace con App/config/config.php.
?>
<nav class="nav02" data-nav02>
  <div class="nav02__inner">
    <a class="nav02__brand" href="/es" aria-label="Ir al inicio">
      <!-- <span class="nav01__logo" aria-hidden="true">LS</span>
      <span class="nav01__brandText">Porfolio</span> -->
   
    </a>

    <button class="nav02__toggle" type="button" aria-controls="nav02-menu-es" aria-expanded="false" aria-label="Abrir menú" data-nav02-toggle data-nav02-label-open="Abrir menú" data-nav02-label-close="Cerrar menú">
      <span class="nav02__toggleLine"></span>
      <span class="nav02__toggleLine"></span>
      <span class="nav02__toggleLine"></span>
    </button>

    <div class="nav02__panel" id="nav02-menu-es" data-nav02-menu>
      <div class="nav02__panelInner">
        <?php
        // enlaces.php también se usa en el footer. Cada copia necesita un ID
        // distinto para que aria-controls apunte a un submenú único.
        $idSubmenu = 'nav-servicios-es';
        require app_path('includes/es/enlaces.php');
        ?>

        <div class="nav02__langs" aria-label="Idiomas">
          <!-- Para mantener el ejemplo sencillo, cada idioma enlaza a su inicio. -->
          <a class="nav02__lang is-active" href="/es" lang="es" hreflang="es" aria-current="true">ES</a>
          <a class="nav02__lang" href="/eu" lang="eu" hreflang="eu">EU</a>
        </div>
      </div>
    </div>
  </div>
</nav>
