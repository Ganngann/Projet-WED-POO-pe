<?php

  /*
    ./app/modeles/Post.php
    Modèle d'un Post
  */

    namespace App\Modeles;

      class Post extends \Noyau\Classes\ModeleGenerique {

        private $_email, $_created_at;

        // GETTERS
        public function getEmail() {
          return $this->_email;
        }
        public function getCreated_at() {
          return $this->_created_at;
        }


        // SETTERS
        public function setEmail(int $data = null) {
          if (isset($data)):
            $this->_email = $data;
          endif;
        }
        public function setCreated_at(int $data = null) {
          if (isset($data)):
            $this->_created_at = $data;
          endif;
        }


      }