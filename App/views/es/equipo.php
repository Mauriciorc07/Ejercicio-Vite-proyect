<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/quienes-somos') ?>">
    <title>sobre mi</title>
    <meta name="description" content="Apasionado por el desarrollo de aplicaciones web.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require app_path('includes/cookielad.php'); ?>
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>
      
    <main>
        <section>
            
                <h1 class="moduloNikoH2">PROYECTOS</h1>
            
        </section>
      <section class="sect01">
        <article>
                <!-- hijo 1 -->
              <div>
                <h2 class="h2Especial">Sección 01 · Matrix ipsum</h2>
                <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.</p>
                <span></span>
                <div class="cards">
                    <div class="card">  
                        <h4>html,css,elementor,wordpress,javascrip,php</h4> 
                    </div>
                 
                </div>
                <a href="" class="moduloBoton02">
                    <span>ver completo</span>
                    <img src="<?= asset('assets/img/icons/arrow-forward-outline.svg') ?>" alt="" title="">
                </a>
            </div>
            <!-- hijo 2 -->
            <div>
                <img src="<?= asset('assets/img/test/dummy03.avif') ?>" alt="Escena de Matrix">
            </div>
        </article>
      </section>

      <section class="sect01">
          <article>
              <!-- hijo 1 -->
              <div>
                <h2 class="h2Especial">Sección 01 · Matrix ipsum</h2>
                <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.</p>
                <span></span>
                <div class="cards">
                    <div class="card">
                        <img src="<?= asset('assets/img/test/dummy04.avif') ?>" alt="Escena de Matrix">
                        <h4>Matrix ipsum 01</h4>
                        <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.</p>
                        <a href="" class="moduloBoton01">
                            <span>Módulo Botón 01</span>
                            <img src="<?= asset('assets/img/icons/arrow-forward-outline.svg') ?>" alt="" title="">
                        </a>
                    </div>
                    <div class="card">
                        <img src="<?= asset('assets/img/test/dummy03.avif') ?>" alt="Escena de Matrix">
                        <h4>Matrix ipsum 02</h4>
                        <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem et realitatem.</p>
                        <a href="" class="moduloBoton01">
                            <span>Módulo Botón 01</span>
                            <img src="<?= asset('assets/img/icons/arrow-forward-outline.svg') ?>" alt="" title="">
                        </a>
                    </div>
                </div>
                <a href="" class="moduloBoton02">
                    <span>Módulo Botón 02</span>
                    <img src="<?= asset('assets/img/icons/arrow-forward-outline.svg') ?>" alt="" title="">
                </a>
              </div>
                 <!-- hijo 2 -->
              <div>
                  <img src="<?= asset('assets/img/test/dummy03.avif') ?>" alt="Escena de Matrix">
              </div>
          
          </article>
      </section>

      <section class="sect01">
          <article>
              <!-- hijo 1 -->
              <div>
                <h2 class="h2Especial">Sección 01 · Matrix ipsum</h2>
                <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.</p>
                <span></span>
                <div class="cards">
                    <div class="card">
                        <img src="<?= asset('assets/img/test/dummy04.avif') ?>" alt="Escena de Matrix">
                        <h4>Matrix ipsum 01</h4>
                        <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.</p>
                        <a href="" class="moduloBoton01">
                            <span>Módulo Botón 01</span>
                            <img src="<?= asset('assets/img/icons/arrow-forward-outline.svg') ?>" alt="" title="">
                        </a>
                    </div>
                    <div class="card">
                        <img src="<?= asset('assets/img/test/dummy03.avif') ?>" alt="Escena de Matrix">
                        <h4>Matrix ipsum 02</h4>
                        <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem et realitatem.</p>
                        <a href="" class="moduloBoton01">
                            <span>Módulo Botón 01</span>
                            <img src="<?= asset('assets/img/icons/arrow-forward-outline.svg') ?>" alt="" title="">
                        </a>
                    </div>
                </div>
                <a href="" class="moduloBoton02">
                    <span>Módulo Botón 02</span>
                    <img src="<?= asset('assets/img/icons/arrow-forward-outline.svg') ?>" alt="" title="">
                </a>
              </div>
                 <!-- hijo 2 -->
              <div>
                  <img src="<?= asset('assets/img/test/dummy03.avif') ?>" alt="Escena de Matrix">
              </div>
          
          </article>
      </section>
      

    </main>


    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
