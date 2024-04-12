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

  <!-- Etiquetas comunes -->
<?php include "$basePath/common/head-landing.php" ?>
</head>

<body>
  <!--------------- Rastreador del Tag Manager ---------------->
<?php include "$basePath/common/body-tag-manager.php" ?>

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
      <div class="picture col-md-6" data-aos="fade-left">
        <img class="img-bg" src="https://www.usa-tagac.com/assets/img/lp/checkered/desc-1a.jpg" alt="safe paper for wrapping food">
        <img class="img-md" src="https://www.usa-tagac.com/assets/img/lp/checkered/desc-1b.jpg" alt="safe paper for wrapping food">
        <img class="img-sm" src="https://www.usa-tagac.com/assets/img/lp/checkered/desc-1c.jpg" alt="safe paper for wrapping food">
      </div>
    </div>
    <div class="row item odd even">
      <div class="picture col-md-7" data-aos="fade-right" data-aos-offset="200">
        <img class="img-bg" src="https://www.usa-tagac.com/assets/img/lp/checkered/desc-2a.jpg" alt="safe paper for wrapping food">
        <img class="img-md" src="https://www.usa-tagac.com/assets/img/lp/checkered/desc-2b.jpg" alt="safe paper for wrapping food">
      </div>
      <div class="text first-div col-md-5">
        <div class="header">
          <h2><?php echo $descTitle[$lang][2] ?></h2>
          <p><?php echo $descSub[$lang][2] ?></p>
        </div>
      </div>
      <div class="picture img-sm col-12" data-aos="fade-right">
        <img src="https://www.usa-tagac.com/assets/img/lp/checkered/desc-2c.webp" alt="safe paper for wrapping food">
      </div>
    </div>
    <div class="row item odd">
      <div class="text first-div col-md-5">
        <div class="header">
          <h2><?php echo $descTitle[$lang][3] ?></h2>
          <p><?php echo $descSub[$lang][3] ?></p>
        </div>
      </div>
      <div class="picture col-md-7" data-aos="fade-left">
        <img src="https://www.usa-tagac.com/assets/img/lp/checkered/desc-3.avif" alt="safe paper for wrapping food">
      </div>
    </div>
    <div class="row item even">
      <div class="picture col-md-7" data-aos="fade-right" data-aos-offset="200">
        <img class="img-bg" src="https://www.usa-tagac.com/assets/img/lp/checkered/desc-4a.jpg" alt="safe paper for wrapping food">
        <img class="img-md" src="https://www.usa-tagac.com/assets/img/lp/checkered/desc-4b.jpg" alt="safe paper for wrapping food">
      </div>
      <div class="text first-div col-md-5">
        <div class="header">
          <h2><?php echo $descTitle[$lang][4] ?></h2>
          <p><?php echo $descSub[$lang][4] ?></p>
        </div>
      </div>
      <div class="picture img-sm col-12" data-aos="fade-right">
        <img src="https://www.usa-tagac.com/assets/img/lp/checkered/desc-4c.jpg" alt="safe paper for wrapping food">
      </div>
    </div>
    <div class="col-12 cta-div">
    <a class="cta-button shake" href="#<?php echo $ctaId[$lang] ?>"><?php echo $cta[$lang] ?></a>
    </div>
  </section>

  <div class="separator-top"></div>

  <!-------------------- Product offer ------------------------>
  <section id="<?php echo $prodId[$lang] ?>" class="row offer">
    <div class="header">
      <h2><?php echo $ofrTitle[$lang] ?></h2>
    </div>
    <div class="col-lg-5 col-md-6 content">
      <p><?php echo $ofrSub[$lang] ?></p>
      <div class="cta-div cta-inner">
        <a class="cta-button shake" href="#<?php echo $ctaId[$lang] ?>"><?php echo $cta[$lang] ?></a>
      </div>
    </div>
    <div class="col-lg-7 col-md-6 picture-container">
      <div class="row picture-top" data-aos="zoom-in">
        <img src="https://www.usa-tagac.com/assets/img/lp/checkered/offer1.jpg">
      </div>
      <div class="row space"></div>
      <div class="row picture-bottom" data-aos="zoom-in" data-aos-offset="400">
        <img src="https://www.usa-tagac.com/assets/img/lp/checkered/offer2.jpg">
      </div>
    </div>
  </section>

  <div class="separator-bottom"></div>

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
<?php include "$basePath/common/scripts-landing.php" ?>
</body>

</html>