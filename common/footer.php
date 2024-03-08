  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4> <?php echo $footAddress[$lang] ?> </h4>
            <p> <?php echo $dataAddressFoot ?> <br> </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4> <?php echo $footContact[$lang] ?> </h4>
            <p>
              <strong> <?php echo $footPhone[$lang] ?> </strong>
              <a id="phone-footer" href="tel:<?php echo $dataPhone ?>"><?php echo $dataPhoneStr ?></a><br>
              <strong> <?php echo $footEmail[$lang] ?> </strong>
              <a id="mail-footer" href="mailto:<?php echo $dataEmail ?>"><?php echo $dataEmail ?></a><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4> <?php echo $footHours[$lang] ?> </h4>
            <p> <?php echo $dataHours ?> </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <?php echo $footRights[$lang] ?>
      </div>
    </div>

  </footer>