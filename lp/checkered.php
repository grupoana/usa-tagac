<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
$lang ='en';

include "$basePath/assets/trans/lp/checkered.php";
include "$basePath/common/contact-data.php";
?>
<!DOCTYPE html>
<html lang='<?php echo $lang ?>'>

<head>
  <!-- Idioma y codificación -->
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="content-language" content="<?php echo $lang ?>">

  <!-- Definiciones de la página y SEO -->
  <title><?php echo $seoTitle[$lang] ?></title>
  <meta name="description" content="<?php echo $seoTitle[$lang] ?>">

  <!-- brand/favicons -->
  <link href="https://www.usa-tagac.com/assets/img/brand/favicon.png" rel="icon">
  <link href="https://www.usa-tagac.com/assets/img/brand/apple-touch-icon.png" rel="brand/apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://www.usa-tagac.com/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://www.usa-tagac.com/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="https://www.usa-tagac.com/assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="https://www.usa-tagac.com/assets/css/landing-page.css" rel="stylesheet">

  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WK8GC9DR');</script>
  <!-- End Google Tag Manager -->
</head>

<body>
  <!--------------------- Hero section ------------------------>
  <section id="<?php echo $heroId[$lang] ?>" class="row hero">
    <div class="float-parent">
      <div class="float">
        <h1><?php echo $heroTitle[$lang] ?></h1>
        <p><?php echo $heroSub[$lang] ?></p>
      </div>
    </div>
    <div class="arrow bounce">
      <a href="#<?php echo $descId[$lang] ?>">
        <img src="https://www.usa-tagac.com/assets/img/chevron-down.svg" alt="continue reading">
      </a>
    </div>
  </section>

  <!--------------------- Description ------------------------->
  <section id="<?php echo $descId[$lang] ?>" class="row description">
    <div class="row item odd">
      <div class="text first-div col-md-6">
        <div class="header">
          <h2><?php echo $descTitle[$lang][1] ?></h2>
          <p><?php echo $descSub[$lang][1] ?></p>
        </div>
      </div>
      <div class="picture col-md-6">
        <img class="img-bg" src="https://www.usa-tagac.com/assets/img/lp/checkered/desc-1a.jpg" alt="safe paper for wrapping food">
        <img class="img-md" src="https://www.usa-tagac.com/assets/img/lp/checkered/desc-1b.jpg" alt="safe paper for wrapping food">
        <img class="img-sm" src="https://www.usa-tagac.com/assets/img/lp/checkered/desc-1c.jpg" alt="safe paper for wrapping food">
      </div>
    </div>
    <div class="row item odd even">
      <div class="picture col-md-7">
        <img class="img-bg" src="https://www.usa-tagac.com/assets/img/lp/checkered/desc-2a.jpg" alt="safe paper for wrapping food">
        <img class="img-md" src="https://www.usa-tagac.com/assets/img/lp/checkered/desc-2b.jpg" alt="safe paper for wrapping food">
      </div>
      <div class="text first-div col-md-5">
        <div class="header">
          <h2><?php echo $descTitle[$lang][2] ?></h2>
          <p><?php echo $descSub[$lang][2] ?></p>
        </div>
      </div>
      <div class="picture img-sm col-12">
        <img src="https://www.usa-tagac.com/assets/img/lp/checkered/desc-2c.webp" alt="safe paper for wrapping food">
      </div>
    </div>
    <div class="col-12 cta-div">
      <button class="cta-button shake"><?php echo $cta[$lang] ?></button>
    </div>
  </section>

  <!-------------------- Product offer ------------------------>
  <section id="<?php echo $prodId[$lang] ?>" class="row">
    <div class="header">
      <h2></h2>
      <p></p>
    </div>
    <div class="col-md-6">
      <img src="">
      <p></p>
    </div>
    <div class="col-md-6">
      <img src="">
      <p></p>
    </div>
    <div class="col-md-6 offset-md-3">
      <h3></h3>
      <p></p>
    </div>
    <div class="col-12 cta-div">
      <button class="cta-button shake"><?php echo $cta[$lang] ?></button>
    </div>
  </section>

  <!----------------------- About Us -------------------------->
  <section id="<?php echo $aboutId[$lang] ?>" class="row">
    <div class="header">
      <h2></h2>
      <p></p>
    </div>
  </section>

  <!-------------------- Call to Action ----------------------->
  <section id="<?php echo $ctaId[$lang] ?>" class="row">
    <div class="header col-md-6">
      <h2></h2>
      <p></p>
    </div>
    <div class="col-md-6">
      <form>
        <input>
        <input>
        <button class="cta-button"><?php echo $cta[$lang] ?></button>
      </form>
    </div>
  </section>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://www.usa-tagac.com/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://www.usa-tagac.com/assets/vendor/aos/aos.js"></script>
  <script>
    AOS.init({duration: 300, easing: 'ease-in-out', once: true, mirror: false});
  </script>
  <script>
    !function(f,b,e,v,n,t,s) {
      if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);
      t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)
    }(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '7140944829316380');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=7140944829316380&ev=PageView&noscript=1"/>
  </noscript>

</body>

</html>