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
    <?php require app_path('includes/cookielad.php'); ?>
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
                <h2 class="moduloNikoH2">como podemos trabajar juntos </h2>
            </div>
            <div class="art09-content">

                <div class="contenedor-lista">
                <h3>valores</h3>
                <ul>
                    <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="" title="">
                    <span>Adaptabilidad.</span>
                    </li>
                    <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="" title="">
                    <span>Trabajo en equipo.</span>
                    </li>
                    <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="" title="">
                    <span>Comunicación efectiva.</span>
                    </li>
                    <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="" title="">
                    <span>Compromiso.</span>
                    </li>
                    <!-- <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="" title="">
                    <span>Matrix ipsum: machinae quaerunt.</span>
                    </li> -->
                </ul>
                </div>

                <div class="contenedor-lista">
                <h3>metodología</h3>
                <ul>
                    <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="" title="">
                    <span>Comprender los requerimientos: Analizo las necesidades del proyecto y defino claramente los objetivos.</span>
                    </li>
                    <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="" title="">
                    <span>Planificar: Organizo las tareas, establezco prioridades y defino tiempos de ejecución</span>
                    </li>
                    <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="" title="">
                    <span>Desarrollar:buenas prácticas de desarrollo de software, código limpio y estándares de calidad</span>
                    </li>
                    <li>
                    <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="" title="">
                    <span>Desarrollar: Implemento soluciones aplicando buenas prácticas de desarrollo de software.</span>
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
