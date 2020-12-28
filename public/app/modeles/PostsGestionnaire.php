<?php

  /*
    ./app/modeles/postsModele.php
    Gestionnaire des posts
  */

    namespace App\Modeles;
    use \Noyau\Classes\App;

      class PostsGestionnaire {

        public function findAll(string $tri, int $nbr) {
          $sql = "SELECT *
                  FROM posts
                  ORDER BY `{$tri}` DESC
                  LIMIT $nbr;";
          $rs = App::getConnexion()->prepare($sql);
          $rs->execute();
          $posts = $rs->fetchAll(\PDO::FETCH_ASSOC);

          $tab = [];
          foreach ($posts as $post):
            $tab[] = new Post($post);
          endforeach;

          return $tab;
        }

      }
