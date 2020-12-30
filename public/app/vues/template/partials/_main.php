<?php

/*
    ./app/vues/template/partials/_main.php
  */

use Noyau\Classes\Template;
?>

<main>
  <!--================Blog Area =================-->
  <section class="blog_area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0">
          <?php
          // echo $content;
          echo(Template::getZone('content1'))
          ?>
        </div>
        <?php include '../app/vues/template/partials/_aside.php'; ?>
      </div>
    </div>
    </div>
  </section>
  <!--================Blog Area =================-->
</main>