<?php

  /*
    ./app/routeurs/public.php
    ROUTEUR PRINCIPAL DU SITE PUBLIC
  */

    if (isset($_GET['postID'])):
    include_once '../app/routeurs/posts.php';
    else:
    // ROUTE PAR DEFAUT
    // PATTERN: /
    // CTRL: PostsControleur
    // ACTION: index
      $ctrl = new App\Controleurs\PostsControleur();
      $ctrl->indexAction();
    endif;