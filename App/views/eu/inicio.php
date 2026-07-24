<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/') ?>">
    <title>Mauricio Mahecha | Software garapena eta proiektuak</title>
    <meta name="description" content="Software garapena, diseinu teknikoa eta proiektu digitalak: ezagutu nire lana, trebetasunak eta lankidetzak.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require app_path('includes/cookielad.php'); ?>
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>

    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="header01">
      <!-- <img class="header01__media" src="<?= asset('assets/img/views/hero1.webp') ?>" alt="Atzeko planoko irudia"> -->
      <video class="header01__media" autoplay muted loop playsinline>
       <source src="<?= asset('assets/img/views/azulpunt.mp4') ?>" type="video/mp4">
      </video>
      <div class="header01__content">
        <!-- <p class="header01__eyebrow">Kaixo</p> -->
        <h1 >MAURICIO MAHECHA</h1>
        <p class="header01__text">"Etorkizuna aurreikusteko modurik onena hura sortzea da."<br> <strong>Peter Drucker. </strong></p>
        <a href="<?= asset('assets/docs/javascript-uoc.pdf') ?>" target="_blank" class="boton">Ikusi curriculuma</a>
      </div>
    </header>

    <main>

        <section>
            <!-- Artikulu 13 -->
            <article class="art13">
                <img
                    alt="Mauricio Mahecha-ren erretratua"
                    title="Mauricio Mahecha-ren erretratua"
                    srcset="
                    <?= asset('assets/img/views/fotocara.avif') ?> 1800w,
                    <?= asset('assets/img/views/fotocara.avif') ?> 1200w
                    "
                    sizes="
                    (max-width:800px) 900px,
                    1500px
                    "
                    src="<?= asset('assets/img/views/fotocara.avif') ?>"
                >
                <div>
                <div>
                    <h2 class="moduloNikoH2">NIRE BURUAZ</h2>
                </div>
                    <p>Software garapenarekin sutsua naiz, eta irtenbide teknologiko eraginkorrak, eskalagarriak eta kalitate handikoak sortzeko konpromiso sendoa dut. Etengabe ikasteak eta teknologia berriak, metodologia arinak eta garapeneko praktika onak txertatzeak motibatzen naute, hala nola software diseinua, aplikazioen arkitektura, bertsio-kontrola, integrazio jarraitua eta prozesuen automatizazioa.</p>
                    <p>Nire garapen profesionalaz gain, familia da nire bizitzaren motor nagusia eta nire balioen oinarria. Aisialdian futbola, musika entzutea eta bidaiatzea gustatzen zait; horrek guztiak sormena, egokitzeko gaitasuna eta ikuspegi globala indartzen dizkit.</p>
                </div>
            </article>
        </section>

        <section>
            <!-- art15 -->
            <article class="art15">
                <div>
                    <h2 class="moduloNikoH2">NIRE PROIEKTUAK</h2>
                </div>

                <div>
                    <a href="" class="item">
                    <h3>VQS GOURTMET</h3>
                    <p>Ardo eta gazta denda baterako e-commerce proiektua</p>
                    <img src="<?= asset('assets/img/views/herovino.avif') ?>" alt="Ardo eta gazta boutique baten irudia" title="Ardo eta gazta boutique baten irudia" width="700" height="700">
                    </a>

                    <a href="" class="item">
                    <h3>Barrualde-diseinua</h3>
                    <p>Barrualde-diseinu enpresa baterako web diseinua</p>
                    <img src="<?= asset('assets/img/views/inteiror.avif') ?>" alt="Barrualde-diseinuaren maketa" title="Barrualde-diseinuaren maketa">
                    </a>

                    <a href="" class="item">
                    <h3>Hanburgeseria baten webgunea</h3>
                    <p>Donostiako hanburgeseria baterako web orria</p>
                    <img src="<?= asset('assets/img/views/hamburguesa.avif') ?>" alt="Hanburgeseria baten web diseinua" title="Hanburgeseria baten web diseinua">
                    </a>
                </div>
            </article>

        </section>

        <section>
            <!-- artikulua 09 -->
            <article class="art09">

                 <div>
                    <h2 class="moduloNikoH2">HIZKUNTZAK ETA TREBETASUNAK</h2>
                </div>

                <div class="art09-content">

                    <div class="contenedor-lista">
                    <h3>DISEINUA</h3>
                    <ul>
                        <li>
                        <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="Figma ikonoa" title="Figma ikonoa">
                        <span>Figma</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="Photoshop ikonoa" title="Photoshop ikonoa">
                        <span>Photoshop</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="Sass ikonoa" title="Sass ikonoa">
                        <span>Sass</span>
                        </li>
                    </ul>
                    </div>

                    <div class="contenedor-lista">
                    <h3>PROGRAMAZIO HIZKUNTZAK</h3>
                    <ul>
                        <li>
                        <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="JavaScript ikonoa" title="JavaScript ikonoa">
                        <span>JavaScript</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="Java ikonoa" title="Java ikonoa">
                        <span>Java</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="Python ikonoa" title="Python ikonoa">
                        <span>Python</span>
                        </li>
                    </ul>
                    </div>

                </div>

            </article>
        </section>

    <?php require app_path('includes/eu/formulario.php'); ?>

    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
</body>
</html>
