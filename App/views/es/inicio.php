<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/') ?>">
    <title>porfolio</title>
    <meta name="description" content="proyectos creados individualmente, trabajo en equipo.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require app_path('includes/cookielad.php'); ?>
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>

    <?php require app_path('includes/es/nav.php'); ?>

    <header class="header01">
      <!-- <img class="header01__media" src="<?= asset('assets/img/views/hero1.webp') ?>" alt="abst"> -->
      <video class="header01__media" autoplay muted loop playsinline>
       <source src="<?= asset('assets/img/views/azulpunt.mp4') ?>" type="video/mp4">
      </video>
      <div class="header01__content">
        <!-- <p class="header01__eyebrow">Hola</p> -->
        <h1 >MAURICIO MAHECHA</h1>
        <p class="header01__text">"La mejor manera de predecir el futuro es crearlo."<br> <strong>Peter Drucker. </strong> </p>
        <a href="<?= asset('assets/docs/javascript-uoc.pdf') ?>" target="_blank" class="boton">Ver curriculum</a>
      </div>
    </header>

    <main>
        <section class="">
            <div>
                    <h2 class="moduloNikoH2">HERRAMIENTAS / SKILLS</h2>
                </div>
            <!-- artículo skill -->
            <!-- <article class="artskill">
                <div>
                    <h2 class="moduloNikoH2">HERRAMIENTAS / SKILLS</h2>
                </div>
            </article> -->
            <article class="skill">
                <h3>DISEÑO</h3>
                <div class="skill-content">
                    <div class="hicon">
                        <img src="<?= asset('assets/img/icons/vite.svg') ?>" alt="figma" title="figma">
                        <span>Vite</span> 
                    </div>
                    <div class="hicon">
                        <img src="<?= asset('assets/img/icons/icss.svg') ?>" alt="figma" title="figma">
                        <span>Css</span> 
                    </div>
                    <div class="hicon">
                        <img src="<?= asset('assets/img/icons/ihtml.svg') ?>" alt="figma" title="figma">
                        <span>Html</span> 
                    </div>
                    <div class="hicon">
                        <img src="<?= asset('assets/img/icons/iscss.svg') ?>" alt="figma" title="figma">
                        <span>Sass</span> 
                    </div>
                    <div class="hicon">
                        <img src="<?= asset('assets/img/icons/igithub.svg') ?>" alt="figma" title="figma">
                        <span>Github</span> 
                    </div>
                    <div class="hicon">
                        <img src="<?= asset('assets/img/icons/vite.svg') ?>" alt="figma" title="figma">
                        <span>figma</span> 
                    </div>
                    <div class="hicon">
                        <img src="<?= asset('assets/img/icons/vite.svg') ?>" alt="figma" title="figma">
                        <span>figma</span> 
                    </div>
                    <div class="hicon">
                        <img src="<?= asset('assets/img/icons/vite.svg') ?>" alt="figma" title="figma">
                        <span>figma</span> 
                    </div>
                    <div class="hicon">
                        <img src="<?= asset('assets/img/icons/vite.svg') ?>" alt="figma" title="figma">
                        <span>figma</span> 
                    </div>
                    <div class="hicon">
                        <img src="<?= asset('assets/img/icons/vite.svg') ?>" alt="figma" title="figma">
                        <span>figma</span> 
                    </div>
                    <div class="hicon">
                        <img src="<?= asset('assets/img/icons/vite.svg') ?>" alt="figma" title="figma">
                        <span>figma</span> 
                    </div>
                    <div class="hicon">
                        <img src="<?= asset('assets/img/icons/vite.svg') ?>" alt="figma" title="figma">
                        <span>figma</span> 
                    </div>
                </div>
            </article>
        </section>
        <section>
            <!-- Artículo 13-->
            <article class="art13">
                <img
                    alt="retrato" 
                    title="retrato"
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
                    <h2 class="moduloNikoH2">SOBRE MI</h2>
                </div>
                    <p> Apasionado por el desarrollo de software, con un fuerte compromiso hacia la creación de soluciones tecnológicas eficientes, escalables y de alta calidad. Me motiva el aprendizaje continuo y la adopción de nuevas tecnologías, metodologías ágiles y buenas prácticas de desarrollo, como el diseño web, la arquitectura de aplicaciones, el control de versiones, la integración continua y la automatización de procesos.</p>
                    <p>Además de mi desarrollo profesional, considero que la familia es el principal motor de mi vida y la base de mis valores. En mi tiempo libre disfruto del fútbol, escuchar música y viajar, actividades que fortalecen mi creatividad, capacidad de adaptación y visión global.</p>
                </div>
            </article>
        </section>  
        <section>
            <!-- art15 -->
            <article class="art15">
                <div>
                    <h2 class="moduloNikoH2"> MIS PROYECTOS </h2>
                </div>

                <div>
                    <a href="" class="item">
                    <h3>VQS GOURTMET</h3>
                    <p>Proyecto Ecommerce de una tienda de vinos y quesos</p>
                    <img src="<?= asset('assets/img/views/herovino.avif') ?>" alt="Vinos, quesos y algo más" title="Vinos, quesos y algo más" width="700" height="700">              
                    </a>

                    <a href="" class="item">
                    <h3>Diseño de interiores</h3>
                    <p>Diseño web para una empresa de diseño de interiores.</p>
                    <img src="<?= asset('assets/img/views/inteiror.avif') ?>" alt="Mockup de diseño de interiores" title="Mockup de diseño de interiores">
                    </a>
                    
                    <a href="" class="item">
                    <h3> web de una Hamburgeseria</h3>
                    <p>Página web de una Hamburgeseria en Donostia</p>
                    <img src="<?= asset('assets/img/views/hamburguesa.avif') ?>" alt="Diseño de una página web de una hamburgeseria">
                    </a>
                </div>
            </article>

        </section>

        <section>
            <!-- artículo 09 -->
            <article class="art09">

                    <div>
                    <h2 class="moduloNikoH2">HERRAMIENTAS / SKILLS</h2>
                </div>

                <div class="art09-content">

                    <div class="contenedor-lista">
                    <h3>DISEÑO</h3>
                    <ul>
                        <li>
                        <img src="<?= asset('assets/img/icons/vite.svg') ?>" alt="figma" title="figma">
                        <span>figma</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="photoshop" title="photoshop">
                        <span>photoshop</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="sass" title="sass">
                        <span>sass</span>
                        </li>
                    
                    </ul>
                    <div class="contenedor-lista">
                    <h3>LENGUAJES DE PROGRAMACIÒN</h3>
                    <ul>
                        <li>
                        <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="javascript" title="javascript">
                        <span>javascript</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="java" title="java">
                        <span>java.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/circle.svg') ?>" alt="phyton" title="phyton">
                        <span>phyton.</span>
                        </li>
                    </ul>
                    </div>
                    </div>

                    

                </div>

            </article>
        </section>
        
    <?php require app_path('includes/es/formulario.php'); ?>

    </main>

    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
