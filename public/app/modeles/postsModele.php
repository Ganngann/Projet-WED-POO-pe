<?php

  /*
    ./app/modeles/postsModele.php
    Modèle des posts
  */

    namespace App\Modeles\PostsModele;

      function findAll(\PDO $connexion) {
        $sql = "SELECT *
                FROM posts
                JOIN posts_has_tags ON posts.id = posts_has_tags.post_id
                JOIN tags ON tags.id = posts_has_tags.tag_id
                ORDER BY posts.created_at DESC
                LIMIT 10;";
        $rs = $connexion ->query($sql);
        return $rs->fetchAll(\PDO::FETCH_ASSOC);
      }
