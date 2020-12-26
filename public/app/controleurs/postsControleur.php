<?php

  /*
    ./app/controleurs/postsControleur.php
    Contrôleur des posts
  */

    namespace App\Controleurs\PostsControleur;
    use App\Modeles\PostsModele;

      function indexAction(\PDO $connexion) {
        // Je mets dans $posts la liste des 10 derniers posts que je demande au modèle
        include_once '../app/modeles/postsModele.php';
        $posts = PostsModele\findAll($connexion);

        // Je charge la vue posts/index dans $content
        GLOBAL $content, $title;
        $title = "Wedding | Template";
        ob_start();
          include '../app/vues/posts/index.php';
        $content = ob_get_clean();
      }
