<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/eu/lege-oharra') ?>">
    <title>Lege oharra, pribatutasuna eta cookieak</title>
    <meta name="description" content="Webgunearen titulartasunari, pribatutasunari, datuen babesari eta cookieen kudeaketari buruzko lege informazio eredua.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require app_path('includes/cookielad.php'); ?>
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <main class="legalPage">
      <header class="legalPage__hero">
        <p class="legalPage__eyebrow">Lege informazioa</p>
        <h1>Lege oharra, pribatutasuna eta cookieak</h1>
        <p class="legalPage__intro">Web korporatibo arrunt baterako lege testu eredua. Ordezkatu kortxete arteko datuak titularraren benetako datuekin eta egokitu helburuak proiektuak formularioak, eskaerak, newsletterra, analitika edo hirugarrenen cookieak erabiltzen baditu.</p>
      </header>

      <nav class="legalPage__index" aria-label="Lege aurkibidea">
        <a href="#aviso-legal">Lege oharra</a>
        <a href="#politica-privacidad">Pribatutasun politika</a>
        <a href="#gestion-cookies">Cookieen kudeaketa</a>
      </nav>

      <section class="legalPage__section" id="aviso-legal">
        <h2>Lege oharra</h2>
        <p>Informazio gizartearen zerbitzuei aplikatu beharreko araudia betez, webgune honen titularra honako hau dela jakinarazten da:</p>
        <ul>
          <li>Titularra: [Izen edo sozietate-izena]</li>
          <li>NAN/IFZ: [Identifikazio zenbakia]</li>
          <li>Helbidea: [Helbide osoa]</li>
          <li>Posta elektronikoa: [correo@dominio.com]</li>
          <li>Telefonoa: [harremanetarako telefonoa]</li>
          <li>Erregistro datuak, hala badagokio: [Merkataritza Erregistroa, tomoa, folioa, orria eta inskripzioa]</li>
        </ul>
        <h3>Helburua</h3>
        <p>Webguneak titularraren jarduerari, produktuei edo zerbitzuei buruzko informazioa eskaintzen du. Sarbideak eta erabilerak erabiltzaile izaera ematen dute eta lege ohar hau onartzea dakar.</p>
        <h3>Webgunearen erabilera</h3>
        <p>Erabiltzaileak konpromisoa hartzen du webgunea modu legezkoan, arduratsuan eta errespetuz erabiltzeko, sistemetan, eduki edo zerbitzuetan kalterik eragin gabe eta legez kanpoko, iruzurrezko edo fede onaren aurkako jarduerarik egin gabe.</p>
        <h3>Jabetza intelektuala eta industriala</h3>
        <p>Edukiek, testuek, irudiek, diseinuak, iturburu-kodeak, markek eta bereizgarriak titularrarenak edo haren lizentzia-baimen dutenenak dira. Ez da baimentzen haien erreprodukzioa, banaketa edo eraldaketa baimen espresurik gabe, legez baimendutako kasuetan izan ezik.</p>
        <h3>Erantzukizuna</h3>
        <p>Titularrak informazioa eguneratuta eta eskuragarri mantentzen saiatzen da, baina ez du bermatzen akats, eten edo gorabehera teknikorik egongo ez denik. Kanpoko estekek, baldin badaude, hirugarrenen webguneetara eramaten dute, eta horien baldintzak eta politikak titularrarenak ez dira.</p>
      </section>

      <section class="legalPage__section" id="politica-privacidad">
        <h2>Pribatutasun politika</h2>
        <p>Webgune honen bidez bil daitezkeen datu pertsonalak konfidentzialtasunez eta aplikatu beharreko datu babesaren araudiaren arabera tratatuko dira.</p>
        <h3>Tratamenduaren arduraduna</h3>
        <p>Arduraduna: [Izen edo sozietate-izena]. Kontaktua: [correo@dominio.com]. Helbidea: [Helbide osoa].</p>
        <h3>Helburuak</h3>
        <p>Datuak kontsultak artatzeko, eskaerak kudeatzeko, kontratatutako zerbitzuak emateko, merkataritza edo administrazio harremana mantentzeko eta legezko betebeharrak betetzeko tratatu ahal izango dira. Newsletterrak, formulario aurreratuak, online salmenta edo analitika gaitzen badira, haien helburu zehatzak gehitu beharko dira.</p>
        <h3>Legitimazioa</h3>
        <p>Tratamenduaren oinarri juridikoa izan daiteke interesdunaren baimena, kontratu aurreko edo kontratu betebeharrak betetzea, legezko obligazioak betetzea edo, aplikagarria denean, interes legitimoa.</p>
        <h3>Kontserbazioa</h3>
        <p>Datuak bildutako helburua betetzeko behar den denboran gordeko dira eta, ondoren, balizko erantzukizun legalak artatzeko behar diren epeetan.</p>
        <h3>Hartzaileak</h3>
        <p>Datuak ez zaizkie hirugarrenei jakinaraziko legezko obligazioagatik ez bada edo zerbitzua emateko beharrezkoa denean tratamendu-arduradunen bitartez, hala nola web ostatua, posta elektronikoa, mantentze teknikoa edo kudeaketa tresnak.</p>
        <h3>Esku-eskubideak</h3>
        <p>Interesdunak eskubidea du bere datuetara sartzeko, zuzentzeko, ezabatzeko, aurka egiteko, tratamendua mugatzeko, datuak eramateko eta baimena kentzeko [correo@dominio.com] helbidera idatziz. Halaber, Espainiako Datuak Babesteko Agentzian erreklamazioa aurkeztu dezake tratamendua araudiarekin bat ez datorrela iruditzen bazaio.</p>
      </section>

      <section class="legalPage__section" id="gestion-cookies">
        <h2>Cookieen kudeaketa</h2>
        <p>Stack honek ez ditu teknikoki beharrezkoak ez diren cookieak instalatzen lehenetsita. Amaierako proiektuak analitika, publizitatea, mapa txertatuak, bideoak, sare sozialak edo hirugarrenen bestelako zerbitzuak badakartza, informazio eta baimen sistema bat gehitu beharko da dagokionean.</p>
        <h3>Cookie motak</h3>
        <ul>
          <li>Cookie teknikoak: nabigazioa eta oinarrizko funtzioak ahalbidetzen dituzte. Normalean ez dute baimenik behar.</li>
          <li>Lehentasun, analitika, publizitate edo hirugarrenen cookieak: informazio argia eta, dagokionean, instalatu aurretiko baimena behar dute.</li>
        </ul>
        <h3>Baimena nola aldatu</h3>
        <p>Cookie kudeatzailea ezartzen denean, erabiltzaileak cookieak onartu, ukatu edo konfiguratzeko aukera izan beharko du erraztasun berarekin, eta geroago ere baimena kendu ahal izango du atal honetatik.</p>
        <p class="legalPage__notice">Egokitzeke dagoen txantiloia: ordezkatu bloke hau konfigurazio botoi errealarekin, proiektuak baimena behar duten cookieak baditu.</p>
      </section>
    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>
