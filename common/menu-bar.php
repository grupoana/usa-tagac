
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WK8GC9DR" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="/<?php echo $langURL.$salesRef ?>" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="https://www.tagac.com.mx/assets/img/brand/logo.png" class="img-fluid" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/<?php echo $langURL.$salesRef ?>#<?php echo $heroId[$lang] ?>">
              <?php echo $menuHome[$lang] ?>
            </a></li>
          <li><a href="/<?php echo $langURL.$salesRef ?>#<?php echo $aboutId[$lang] ?>">
              <?php echo $menuAbout[$lang] ?>
            </a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="/#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $menuProducts[$lang] ?>
            </a>
            <ul class="dropdown-menu">
              <?php foreach ($submenuProducts[$lang] as $category): ?>
                <li><a href="/<?php echo ($langURL.$salesRef . $category['href'] ) ?>" class="dropdown-item">
                  <?php echo $category['title']?>
                </a></li>
              <?php endforeach ?>
            </ul>
          </li>
          <li><a href="/<?php echo $langURL.$salesRef ?>#<?php echo $shipId[$lang] ?>">
              <?php echo $menuShipping[$lang] ?>
            </a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="d-flex align-items-center gap-3">
        <a class="cta-button" href="/<?php echo $langURL.$salesRef ?>#<?php echo $contId[$lang] ?>">
          <?php echo $menuContact[$lang] ?>
        </a>
        <div class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <?php echo $prefCountry ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a id="ver-us" class="dropdown-item" href="/en/<?php echo $salesRef ?>">US</a>
            </li>
            <li>
              <a id="ver-mx" class="dropdown-item" href="/<?php echo $salesRef ?>">MX</a>
            </li>
          </ul>
        </div>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header>
