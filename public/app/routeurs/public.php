<?php

  /*
    ./app/routeurs/public.php
    ROUTEUR PRINCIPAL DU SITE PUBLIC
  */

    if (isset($_GET['posts'])):
    include_once '../app/routeurs/posts.php';


      // ROUTE DE LA NEWSLETTER
      // PATTERN : /index.php?abonnes
      //Controleur: AbonnesControleur
      // ACTION: add
      elseif (isset($_GET['subscribers'])):
        include_once '../app/routeurs/subscribers.php';

    else:
    // ROUTE PAR DEFAUT
    // PATTERN: /
    // CTRL: PostsControleur
    // ACTION: index
      $ctrl = new App\Controleurs\PostsControleur();
      $ctrl->indexAction('created_at', 5, 0);
      
    endif;