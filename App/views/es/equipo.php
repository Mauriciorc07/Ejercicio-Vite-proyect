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
            <h2 class="h2Especial">VQS, tienda gourtmet</h2>
            <p>En este proyecto el objetivo es crear un e-commerce completo para la venta de productos gourmet.</p>
            <span></span>
            <div class="cards">
                <div class="card"> 
                    <h4>Tecnologia utilizada</h4> 
                    <p>html,css,elementor,wordpress,javascrip,php</p>
                </div>
                
            </div>
             <a href="" class="moduloBoton02">
                    <span>ver completo</span>
                    <img src="<?= asset('assets/img/icons/arrow-forward-outline.svg') ?>" alt="ver-completo" title="ver-completo">
                </a>
        </div>
        <!-- hijo 2 -->
        <div>
            <img src="<?= asset('assets/img/views/herovino.avif') ?>" alt="vqs vinos" title="vqs vinos" >
        </div>
    </article>
    
    </section>
    <section>
        
            <div class="coverflow">

                <div class="slide active"
                    data-title="Montañas">
                    <img src="https://picsum.photos/id/1018/900/600">
                </div>

                <div class="slide"
                    data-title="Bosque">
                    <img src="https://picsum.photos/id/1015/900/600">
                </div>

                <div class="slide"
                    data-title="Lago">
                    <img src="https://picsum.photos/id/1016/900/600">
                </div>

                <div class="slide"
                    data-title="Ciudad">
                    <img src="https://picsum.photos/id/1011/900/600">
                </div>

                <div class="slide"
                    data-title="Desierto">
                    <img src="https://picsum.photos/id/1002/900/600">
                </div>

            </div>

            <div class="title"></div>

    
    </section>
    <section class="sect01">
        <article>
            <!-- hijo 1 -->
            <div>
            <h2 class="h2Especial">Empresa de Diseño de interior</h2>
            <p>el proposito para este proyecto fue completo desde el branding, se creo el diseño de marca, logo y se realizo la porducciòn web completo.</p>
            <span></span>
            <div class="cards">
                <div class="card">
                    <h4>Tecnologia utilizada</h4>
                    <p>html,css,figma,javascrip,php</p>
                </div>
                
            </div>
            </div>
                <!-- hijo 2 -->
            <div>
                <img src="<?= asset('assets/img/views/inteiror.avif') ?>" alt="diseño interior" title="diseño interior"  >
            </div>
        
        </article>
    </section>

    <section class="sect01">
        <article>
            <!-- hijo 1 -->
            <div>
            <h2 class="h2Especial">Página de Hamburguesa BUEY BURGUER</h2>
            <p>El objetivo fue diseñar una pagina para la empresa de hamburguesa en la cual se quiso mostrar el producto estrella.</p>
            <span></span>
            <div class="cards">
                <div class="card">
                    <h4>Tecnologia utilizada</h4>
                    <p>html,css,figma,javascript</p>
                </div>
                <a href="" class="moduloBoton02">
                    <span>ver completo</span>
                    <img src="<?= asset('assets/img/icons/arrow-forward-outline.svg') ?>" alt="ver-completo" title="ver-completo">
                </a>
            </div>
            </div>
                <!-- hijo 2 -->
            <div>
                <img src="<?= asset('assets/img/views/hamburguesa.avif') ?>" alt="hamburgueseria" title="hamburgueseria" >
            </div>
        
        </article>
    </section>

</main>


    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
