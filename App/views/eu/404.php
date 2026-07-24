<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/eu/404') ?>">
    <title>Orria ez da aurkitu</title>
    <meta name="description" content="Eskatutako orria ez da existitzen edo beste helbide batera aldatu da.">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require app_path('includes/cookielad.php'); ?>
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>
    <div class="404cajon">
        <h1>404</h1>
        <h2>¡Ene! Orria ez da aurkitu</h2>

        <p>
            Bilatzen ari zaren orria ez da existitzen edo lekuz aldatu da.
        </p>

    </div>
    <?php require app_path('includes/eu/footer.php'); ?>
</body>
</html>
