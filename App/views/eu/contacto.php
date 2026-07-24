<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/eu/kontaktua') ?>">
    <title>Harremanetan jarri | Mauricio Mahecha</title>
    <meta name="description" content="Jarri harremanetan nirekin lankidetzak, kontsultak edo proiektu digitalak partekatzeko.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require app_path('includes/cookielad.php'); ?>
    <?= vite_tags($route['resources'] ?? null) ?>
</head>
<body>
    <?php require app_path('includes/eu/nav.php'); ?>

<main>
    <?php require app_path('includes/eu/formulario.php'); ?>

    <section>
        <!-- artikulua 09 -->

        <article class="art09">
            <div>
                <h2 class="moduloNikoH2">nola lan egin dezakegu elkarrekin</h2>
            </div>
            <div class="art09-content">

                <div class="contenedor-lista">
                <h3>balioak</h3>
                <ul>
                    <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="Moldakortasun ikonoa" title="Moldakortasun ikonoa">
                    <span>Moldakortasuna.</span>
                    </li>
                    <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="Talde-lan ikonoa" title="Talde-lan ikonoa">
                    <span>Talde-lana.</span>
                    </li>
                    <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="Komunikazio eraginkorraren ikonoa" title="Komunikazio eraginkorraren ikonoa">
                    <span>Komunikazio eraginkorra.</span>
                    </li>
                    <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="Konpromiso ikonoa" title="Konpromiso ikonoa">
                    <span>Konpromisoa.</span>
                    </li>
                </ul>
                </div>

                <div class="contenedor-lista">
                <h3>metodologia</h3>
                <ul>
                    <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="Eskakizunak ulertzearen ikonoa" title="Eskakizunak ulertzearen ikonoa">
                    <span>Eskakizunak ulertzea: proiektuaren beharrak aztertzen ditut eta helburuak argi definitzen ditut.</span>
                    </li>
                    <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="Plangintzaren ikonoa" title="Plangintzaren ikonoa">
                    <span>Plangintza: atazak antolatzen ditut, lehentasunak ezartzen ditut eta exekuzio-epeak definitzen ditut.</span>
                    </li>
                    <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="Garapen onaren ikonoa" title="Garapen onaren ikonoa">
                    <span>Garapena: software garapeneko praktika onak, kode garbia eta kalitate-estandarrak aplikatzen ditut.</span>
                    </li>
                    <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="Irtenbideak inplementatzearen ikonoa" title="Irtenbideak inplementatzearen ikonoa">
                    <span>Irtenbideak inplementatzea: software garapeneko praktika onak aplikatuz soluzioak txertatzen ditut.</span>
                    </li>

                </ul>
                </div>

            </div>

        </article>
    </section>
</main>
    <?php require app_path('includes/eu/footer.php'); ?>
</body>
</html>
