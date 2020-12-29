<?php

  /*
    ./app/routeurs/posts.php
    ROUTEUR DES POSTS
  */

    // ROUTE DU DETAIL D'UN POST
    // PATTERN: posts/{id}/{slug}
    // CTRL: PostsControleur
    // ACTION: show
      $ctrl = new App\Controleurs\PostsControleur();
      $ctrl->showAction($_GET['postID']);