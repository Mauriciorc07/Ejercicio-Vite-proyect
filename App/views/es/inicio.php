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
        <p class="header01__text">Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.</p>
        <a href="<?= asset('assets/docs/javascript-uoc.pdf') ?>" target="_blank" class="boton">Ver curriculum</a>
      </div>
    </header>

    <main>

        <section class="tools-section">
            <div class="container">
                <h2>Herramientas de Desarrollo</h2>
                <p class="section-description">
                    Estas son algunas de las herramientas utilizadas para el desarrollo de software,
                    permitiendo crear aplicaciones modernas, escalables y de alto rendimiento.
                </p>

                <div class="tools-grid">

                    <div class="tool-card">
                        <img src="images/html.png" alt="HTML">
                        <span>HTML5</span>
                    </div>

                    <div class="tool-card">
                        <img src="images/css.png" alt="CSS">
                        <span>CSS3</span>
                    </div>

                    <div class="tool-card">
                        <img src="images/javascript.png" alt="JavaScript">
                        <span>JavaScript</span>
                    </div>

                    <div class="tool-card">
                        <img src="images/react.png" alt="React">
                        <span>React</span>
                    </div>

                    <div class="tool-card">
                        <img src="images/node.png" alt="Node.js">
                        <span>Node.js</span>
                    </div>

                    <div class="tool-card">
                        <img src="images/php.png" alt="PHP">
                        <span>PHP</span>
                    </div>

                    <div class="tool-card">
                        <img src="images/mysql.png" alt="MySQL">
                        <span>MySQL</span>
                    </div>

                    <div class="tool-card">
                        <img src="images/git.png" alt="Git">
                        <span>Git</span>
                    </div>

                </div>
            </div>
        </section>

        <section>
            <!-- Artículo 13-->
            <article class="art13">
                <img
                    alt="" 
                    title=""
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
                    <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.</p>
                    <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus reiciendis et Zion libertatem defendit.</p>
                </div>
            </article>
        </section>  
       
        <section>
            <!-- art15 -->
            <article class="art15">
          
                <div>
                    <h2 class="moduloNikoH2">PROYECTOS Y COLABORACIONES</h2>
                </div>

                <div>
                    <a href="" class="item">
                    <h3>Vino, quesos y algo más...</h3>
                    <p>Proyecto Ecommerce de una tienda de vinos y quesos</p>
                    <img src="<?= asset('assets/img/test/dummy01.avif') ?>" alt="Vinos, quesos y algo más" title="Vinos, quesos y algo más" width="700" height="700">              
                    </a>

                    <a href="" class="item">
                    <h3>Diseño de interiores</h3>
                    <p>Diseño web para una empresa de diseño de interiores.</p>
                    <img src="<?= asset('assets/img/test/dummy03.avif') ?>" alt="Mockup de diseño de interiores" title="Mockup de diseño de interiores">
                    </a>
                    
                    <a href="" class="item">
                    <h3>Página web de una Hamburgeseria</h3>
                    <p>Página web de una Hamburgeseria en Donostia</p>
                    <img src="<?= asset('assets/img/test/dummy04.avif') ?>" alt="Diseño de una página web de una hamburgeseria">
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
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="figma" title="figma">
                        <span>figma</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                        <span>photoshop</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                        <span>sass</span>
                        </li>
                        <!-- <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                        <span>Matrix ipsum: Neo eligendi.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                        <span>Matrix ipsum: machinae quaerunt.</span>
                        </li> -->
                    </ul>
                    </div>

                    <div class="contenedor-lista">
                    <h3>LENGUAJES DE PROGRAMACIÒN</h3>
                    <ul>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                        <span>javascrip</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                        <span>C++</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                        <span>java.</span>
                        </li>
                        <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                        <span>phyton.</span>
                        </li>
                        <!-- <li>
                        <img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="">
                        <span>Matrix ipsum: realitas aperitur.</span>
                        </li> -->
                    </ul>
                    </div>

                </div>

            </article>
        </section>
        
      <?php require app_path('includes/es/formulario.php'); ?>
      
    </main>
   
    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>
