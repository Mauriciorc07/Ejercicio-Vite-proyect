<?php
$cookieladApiKey = trim((string) env('COOKIELAD_API_KEY', ''));

if ($cookieladApiKey === '') {
    echo "<!-- CookieLad no se ha cargado porque falta COOKIELAD_API_KEY. -->";
    return;
}

// El color primario del proyecto viene definido en src/assets/scss/resources/_config.scss.
$primaryColor = '06609c';
?>
<script defer src="https://webda.eus/apis/cookielad/loader.js?key=<?= rawurlencode($cookieladApiKey) ?>&color=<?= rawurlencode($primaryColor) ?>&v=1.799"></script>
