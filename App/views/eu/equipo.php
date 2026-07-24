<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/eu/nortzuk-gara') ?>">
    <title>Nire proiektuak eta lankidetzak</title>
    <meta name="description" content="Ezagutu nire e-commerce, barrualde-diseinu eta hanburgeseria proiektuak, erabilitako teknologiak eta planteamendua.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require app_path('includes/cookielad.php'); ?>
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

<main>
    <section>

            <h1 class="moduloNikoH2">PROIEKTUAK</h1>

    </section>
    <section class="sect01">
    <article>
            <!-- 1. seme-alaba -->
            <div>
            <h2 class="h2Especial">VQS, gourmet denda</h2>
            <p>Proiektu honen helburua gourmet produktuak saltzeko e-commerce oso bat sortzea izan zen.</p>
            <span></span>
            <div class="cards">
                <div class="card">
                    <h4>Erabilitako teknologia</h4>
                    <p>html,css,elementor,wordpress,javascrip,php</p>
                </div>

            </div>

        </div>
        <!-- 2. seme-alaba -->
        <div>
            <img src="<?= asset('assets/img/views/herovino.avif') ?>" alt="VQS ardoak eta gaztak" title="VQS ardoak eta gaztak">
        </div>
    </article>
    </section>

    <section class="sect01">
        <article>
            <!-- 1. seme-alaba -->
            <div>
            <h2 class="h2Especial">Barrualde-diseinuaren enpresa</h2>
            <p>Proiektu honen xedea branding-etik hasi eta web ekoizpen osora arteko lana egitea izan zen, marka diseinua eta logoa barne.</p>
            <span></span>
            <div class="cards">
                <div class="card">
                    <h4>Erabilitako teknologia</h4>
                    <p>html,css,figma,javascrip,php</p>
                </div>

            </div>
            </div>
                <!-- 2. seme-alaba -->
            <div>
                <img src="<?= asset('assets/img/views/inteiror.avif') ?>" alt="Barrualde-diseinuaren maketa" title="Barrualde-diseinuaren maketa">
            </div>

        </article>
    </section>

    <section class="sect01">
        <article>
            <!-- 1. seme-alaba -->
            <div>
            <h2 class="h2Especial">BUEY BURGUER hanburgeseria webgunea</h2>
            <p>Helburua hanburgeseria baterako webgune bat diseinatzea izan zen, produktu izarra ikusgarri jartzeko.</p>
            <span></span>
            <div class="cards">
                <div class="card">
                    <h4>Erabilitako teknologia</h4>
                    <p>html,css,figma,javascript</p>
                </div>

            </div>
            </div>
                <!-- 2. seme-alaba -->
            <div>
                <img src="<?= asset('assets/img/views/hamburguesa.avif') ?>" alt="Hanburgeseria baten web diseinua" title="Hanburgeseria baten web diseinua">
            </div>

        </article>
    </section>

</main>


    <?php require app_path('includes/eu/footer.php'); ?>
</body>
</html>
