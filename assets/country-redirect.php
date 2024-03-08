<?php
require_once "$basePath/assets/vendor/geoplugin/geoplugin.class.php";

$geoplugin = new geoPlugin();
$geoplugin->locate();

$countryCode = $geoplugin->countryCode;

if (!isset($_COOKIE['prefLang'])) {
    setcookie('prefLang', $countryCode, time() + 3600 * 24 * 365, '/');
}

$prefLang = $_COOKIE['prefLang'];

    if (($prefLang == 'US') && ($lang == 'es')) {
        header("Location: https://www.tagac.com.mx/en/$salesRef");
        exit();
    } else if (($prefLang == 'MX') && ($lang == 'en')) {
        header("Location: https://www.tagac.com.mx/$salesRef");
        exit();
    } else  if (($prefLang != 'MX') && ($prefLang != 'US')){
        header("Location: https://www.tagac.com.mx/$salesRef");
        exit();
    }
?>