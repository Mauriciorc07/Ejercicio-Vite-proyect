<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
        <link rel="canonical" href="<?= url('/') ?>">
        <title>Nuestra panaderia</title>
        <meta name="description" content="Panaderia y pasteleria artesana con panes, bolleria y productos recien hechos.">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require app_path('includes/cookielad.php'); ?>
        <?= vite_tags($route['resources'] ?? null) ?>
    </head>
    <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="header01">
        <!-- <img class="header01__media" src="<?= asset('assets/img/views/hero1.webp') ?>" alt="abst"> -->
        <video class="header01__media" autoplay muted loop playsinline>
        <source src="<?= asset('assets/img/views/azulpunt.mp4') ?>" type="video/mp4">
        </video>
        <div class="header01__content">
            <!-- <p class="header01__eyebrow">Hola</p> -->
            <h1 >MAURICIO MAHECHA</h1>
            <p class="header01__text">Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.</p>
            <a href="<?= asset('assets/docs/javascript-uoc.pdf') ?>" target="_blank" class="boton">Ver curriculum</a>
        </div>
    </header>

    <main>

    <section>
    <!-- Sección de Presentación de la empresa -->
    <!-- Art14 -->
    <article class="art14">
        <div class="content">
        <h2>Presentación de la empresa</h2>
        <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem. Agent Smith recusandae Zion, dum machinae architecto mundum regunt et Trinity viam demonstrat.</p>
        <img src="<?= asset('assets/img/test/dummy01.avif') ?>" alt="Escena de Matrix">
        </div>
    </article>
    </section>

    <section>
    <!-- sección de servicios -->
    <h2>Nuestros servicios</h2>

    <!-- Artículo 13-->
    <!-- Servicio de pintor -->
    <article class="art13">
        <img
            alt="" 
            title=""
            srcset="
            <?= asset('assets/img/test/dummy_1800.avif') ?> 1800w,
            <?= asset('assets/img/test/dummy_1200.avif') ?> 1200w
            "
            sizes="
            (max-width:800px) 900px,
            1500px
            "
            src="<?= asset('assets/img/test/dummy_1200.avif') ?>"          
        >
        <div>
            <h3>servicio de pintor</h3>
            <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.</p>
            <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus reiciendis et Zion libertatem defendit.</p>
            <a href="#" class="boton">CTA</a>
        </div>
    </article>

    <!-- Artículo 13 invertido -->
    <!-- servicio de restaurador -->
    <article class="art13 upsidedown">
        <img
            alt="" 
            title=""
            srcset="
            <?= asset('assets/img/test/dummy_1800.avif') ?> 1800w,
            <?= asset('assets/img/test/dummy_1200.avif') ?> 1200w
            "
            sizes="
            (max-width:800px) 900px,
            1500px
            "
            src="<?= asset('assets/img/test/dummy_1200.avif') ?>"          
        >
        <div>
            <h3>Restaurador de muebles</h3>
            <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.</p>
            <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.</p>
            <a href="#" class="boton">CTA</a>
        </div>
    </article>

    </section>
    <?php require app_path('includes/es/formulario.php'); ?>
    </main>
    

    <?php require app_path('includes/eu/footer.php'); ?>
</body>
</html>
