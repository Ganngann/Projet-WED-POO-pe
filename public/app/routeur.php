<?php

  /*
    ./app/routeur.php
    ROUTEUR PRINCIPAL
    Charge le contrôleur et lance l'action qui correspond à ce qui se passe dans l'URL
  */

    // ROUTE PAR DEFAUT
    // PATTERN: /
    // CTRL: postsControleur
    // ACTION: index
      $ctrl = new App\Controleurs\PostsControleur();
      $ctrl->indexAction();
