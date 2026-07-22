<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/contacto') ?>">
    <title>Contactarnos</title>
    <meta name="description" content="Contacta para trabajo en equipo, consultas y trabajar conmigo.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
</head>
<body>
    <?php require app_path('includes/es/nav.php'); ?>

    <main>
       <?php require app_path('includes/es/formulario.php'); ?>
       
       <section>
          <!-- artículo 09 -->
          
          <article class="art09">
                <div>
                    <h2 class="moduloNikoH2">forma en la que sugiero colaborar</h2>
                </div>
              <div class="art09-content">

                  <div class="contenedor-lista">
                  <h4>Matrix ipsum columna 01</h4>
                  <ul>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                      <span>Matrix ipsum: pillula rubra.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                      <span>Matrix ipsum: codex revelatus.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                      <span>Matrix ipsum: Zion vigilat.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                      <span>Matrix ipsum: Neo eligendi.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                      <span>Matrix ipsum: machinae quaerunt.</span>
                      </li>
                  </ul>
                  </div>

                  <div class="contenedor-lista">
                  <h4>Matrix ipsum columna 02</h4>
                  <ul>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                      <span>Matrix ipsum: simulacrum cadit.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                      <span>Matrix ipsum: Morpheus respondet.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                      <span>Matrix ipsum: Trinity navigat.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                      <span>Matrix ipsum: Agent Smith advenit.</span>
                      </li>
                      <li>
                      <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                      <span>Matrix ipsum: realitas aperitur.</span>
                      </li>
                  </ul>
                  </div>

              </div>

          </article>
       </section>
    </main>
    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
