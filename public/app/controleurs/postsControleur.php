<?php

  /*
    ./app/controleurs/postsControleur.php
    Contrôleur des posts
  */

    namespace App\Controleurs;
    use \App\Modeles\PostsGestionnaire;

      class PostsControleur {

        public function indexAction() {
          // Je mets dans $posts la liste des 10 derniers posts que je demande au gestionnaire
          $gestionnaire = new PostsGestionnaire();
          $posts = $gestionnaire->findAll('created_at', 5);
  
          // Je charge la vue posts/index dans $content
          GLOBAL $content, $title;
          $title = "Wedding | Template";
          ob_start();
            include '../app/vues/posts/index.php';
          $content = ob_get_clean();
        }

      }
