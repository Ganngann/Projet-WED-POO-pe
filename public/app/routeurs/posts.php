<?php

/*
    ./app/routeurs/posts.php
    ROUTEUR DES POSTS
  */

$ctrl = new App\Controleurs\PostsControleur();

switch ($_GET['posts']):
  case 'show':
    // DETAIL D'UN POST
    // PATTERN: index?posts=show&id=x
    // CTRL: postsControleur
    // ACTION: show
    $ctrl->showAction($_GET['id']);
    break;
    case 'ajax':
      // DETAIL D'UN POST
      // PATTERN: index?posts=show&id=x
      // CTRL: postsControleur
      // ACTION: show
      $ctrl->ajaxAction('created_at', 5, $_GET['offset']);
      break;
endswitch;
