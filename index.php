<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
$salesRep = $_GET['ref'];
$salesRef = $salesRep == null ? '': "?ref=$salesRep";
$lang = $_COOKIE['prefLang'];

if (!isset($_COOKIE['prefLang'])) {
  $lang = 'en';
  setcookie('prefLang', $lang, time() + 3600 * 24 * 365, '/');
}

include "$basePath/common/contact-data.php";
include "$basePath/assets/trans/index.php";
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
  <!-- Idioma y codificación -->
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="content-language" content="<?php echo $lang ?>">
  <link rel="canonical" href="https://www.usa-tagac.com/">

  <!-- Definiciones de la página y SEO -->
  <title>
    <?php echo $seoTitle[$lang] ?>
  </title>
  <meta name="description" content="<?php echo $seoTitle[$lang] ?>">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "LocalBusiness",
    "name": "TAGAC",
    "description": "<?php echo $seoDesc[$lang] ?>",
    "url": "https://www.usa-tagac.com/",
    "image": "",
    "logo": "https://www.usa-tagac.com/assets/img/brand/logo.png",
    "email": ""<?php echo $dataEmail ?>",
    "telephone": ""<?php echo $dataPhone ?>",
    "openingHours" : "Mo-Fr 08:00-18:00, Sa 08:00-14:00",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": ""<?php echo $streetAddress ?>",
      "addressLocality": ""<?php echo $addressLocality ?>",
      "addressRegion": ""<?php echo $addressRegion ?>",
      "postalCode": ""<?php echo $postalCode ?>",
      "addressCountry": ""<?php echo $addressCountry ?>"
    }
  }
  </script>

  <!-- Hoja de estilo -->
  <link href="https://www.usa-tagac.com/assets/css/main.css" rel="stylesheet">

  <!-- Etiquetas y scripts comunes -->
  <?php include "$basePath/common/head-section.php"; ?>

</head>

<body>
  <!-- Barra de menú superior -->
  <?php include "$basePath/common/menu-bar.php"; ?>

  <!-- ======= Hero Section ======= -->
  <section id="<?php echo $heroId[$lang] ?>" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div
          class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">
            <?php echo $heroTitle[$lang] ?>
          </h2>
          <p data-aos="fade-up" data-aos-delay="100">
            <?php echo $heroSub[$lang] ?>
          </p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="/<?php echo $langURL.$salesRef ?>#<?php echo $contId[$lang] ?>" class="cta-button">
              <?php echo $heroCTA[$lang] ?>
            </a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="https://www.tagac.com.mx/assets/img/HOJA-PARA-ENVOLVER.png" class="img-fluid" alt=""
            data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Botón de Whatsapp ======= -->
  <?php include "$basePath/common/whatsapp-button.php"; ?>

  <!-- ======= Edification Section ======= -->
  <main id="main">
    <section id="edification" class="edification">
      <div class="container" data-aos="zoom-out">
        <div class="section-header">
          <p>
            <?php echo $edifTitle[$lang] ?>
          </p>
        </div>
        <div class="row gy-4">
          <div class="col-lg-5 position-relative edif-img" data-aos="fade-up" data-aos-delay="150"
            style="background-image: url(https://www.usa-tagac.com/<?php echo $edifImg[$lang] ?>); background-position: right; background-repeat: no-repeat; background-size: cover;">
          </div>
          <div class="col-lg-7 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <?php echo $edifText[$lang] ?>
              <a href="/<?php echo $langURL.$salesRef ?>#<?php echo $contId[$lang] ?>" class="cta-button">
                <?php echo $edifCTA[$lang] ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= About Section ======= -->
    <section id="<?php echo $aboutId[$lang] ?>" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>
            <?php echo $aboutTitle[$lang] ?>
          </h2>
          <p>
            <?php echo $aboutSub[$lang] ?>
          </p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-5 position-relative about-img"
            style="background-image: url(https://www.usa-tagac.com/<?php echo $aboutImg[$lang] ?>) ; background-position: center; background-repeat: no-repeat; background-size: cover;"
            data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>
                <?php echo $aboutCTA[$lang] ?>
              </h4>
              <p>
                <?php echo $dataPhoneStr ?>
              </p>
            </div>
          </div>
          <div class="col-lg-7 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <?php echo $aboutText[$lang] ?>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Banner Section ======= -->
    <section id="banner" class="banner">
      <div class="container stats" data-aos="zoom-out">

        <div class="flex">
          <h1 class="text-white">
            <?php echo $ctaTitle[$lang] ?>
          </h1>
          <h5 class="text-white">
            <?php echo $ctaSub[$lang] ?>
          </h5>
          <a class="cta-button" href="/<?php echo $langURL.$salesRef ?>#<?php echo $contId[$lang] ?>">
            <?php echo $ctaBtn[$lang] ?>
          </a>
        </div>

      </div>
    </section>

    <!-- ======= Products Section ======= -->
    <section id="<?php echo $prodId[$lang] ?>" class="products">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>
            <?php echo $prodTitle[$lang] ?>
          </h2>
          <p>
            <?php echo $prodSub[$lang] ?>
          </p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php foreach ($products[$lang] as $item): ?>
              <div class="swiper-slide item d-flex flex-column justify-content-end"
                style="background-image: url(https://www.usa-tagac.com/<?php echo $item['img'] ?>)">
                <h3>
                  <?php echo $item['title'] ?>
                </h3>
                <p class="description">
                  <?php echo $item['sub'] ?>
                </p>
              </div>
            <?php endforeach ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

    <!-- ======= Packaging Section ======= -->
    <section id="<?php echo $packId[$lang] ?>">
      <div class="container-fluid flex-column d-flex jusitfy-content-center align-items-center" data-aos="fade-up">

        <div class="section-header">
          <h2>
            <?php echo $packTitle[$lang] ?>
          </h2>
          <p>
            <?php echo $packSub[$lang] ?>
          </p>
        </div>

        <div id="carrusel" class="carousel slide">
          <div class="carousel-inner">
            <?php
              $directorio = "assets/img/empaque/";
              $imagenes = glob($directorio . "*.{jpg,png,webp,jpeg}", GLOB_BRACE);

              foreach ($imagenes as $index => $imagen) {
                  $activeClass = $index === 0 ? 'active' : '';
                  echo '<div class="carousel-item ' . $activeClass . '">';
                  echo '<img src="' . $imagen . '" class="d-block w-100" alt="Imagen">';
                  echo '</div>';
              }
            ?>
          </div>

          <!-- Agrega controles de navegación -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
        <a class="cta-button mt-4" href="/<?php echo $langURL.$salesRef ?>#<?php echo $contId[$lang] ?>">
          <?php echo $ctaBtn[$lang] ?>
        </a>
      </div>
    </section>

    <!-- ======= Coverage Section ======= -->
      <section id="<?php echo $shipId[$lang] ?>" class="coverage">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>
              <?php echo $shipTitle[$lang] ?>
            </h2>
            <p>
              <?php echo $shipSub[$lang] ?>
            </p>
          </div>

          <div class="row">
            <img src="https://www.usa-tagac.com/<?php echo $shipImg[$lang] ?>" class="col-lg-8"
              alt="<?php echo $shipImgAlt[$lang] ?>">
            <?php echo $shipPoints[$lang] ?>
          </div>
      </section>

    <!-- ======= Contact Section ======= -->
    <section id="<?php echo $contId[$lang] ?>" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>
            <?php echo $contTitle[$lang] ?>
          </h2>
          <p>
            <?php echo $contSub[$lang] ?>
          </p>
        </div>

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>
                  <?php echo $contPhone[$lang] ?>
                </h3>
                <a id="phone-contact" href="tel:<?php echo $dataPhone ?>"><?php echo $dataPhoneStr ?></a>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>
                  <?php echo $contEmail[$lang] ?>
                </h3>
                <a id="email-contact" href="mailto:<?php echo $dataEmail ?>"><?php echo $dataEmail ?></a>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>
                  <?php echo $contAddress ?>
                </h3>
                <p>
                  <?php echo $dataAddress ?><br>
                </p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>
                  <?php echo $contHours ?>
                </h3>
                <div>
                  <?php echo $dataHours ?>
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->
        </div>
      </div>
    </section>

  </main>

  <!-- Pie de página -->
  <?php include "$basePath/common/footer.php"; ?>

  <div id="preloader"></div>

  <!-- Scripts comunes -->
  <?php include "$basePath/common/scripts.php"; ?>

  <!-- Script específico de la página -->
  <script src="https://www.usa-tagac.com/assets/js/main.js"></script>

</body>

</html>