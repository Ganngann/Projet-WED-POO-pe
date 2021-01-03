<?php

  /*
    ./app/modeles/Post.php
    Modèle d'un Post
  */

    namespace App\Modeles;

      class Post extends \Noyau\Classes\ModeleGenerique {

        private $_id = null, $_title, $_content, $_image, $_created_at;

        // GETTERS
        public function getId() {
          return $this->_id;
        }
        public function getTitle() {
          return $this->_title;
        }
        public function getContent() {
          return $this->_content;
        }
        public function getImage() {
          return $this->_image;
        }
        public function getCreated_at() {
          return $this->_created_at;
        }

        // SETTERS
        public function setId(int $data = null) {
          if (isset($data)):
            $this->_id = $data;
          endif;
        }
        public function setTitle(string $data = null) {
          if (isset($data)):
            $this->_title = $data;
          endif;
        }
        public function setContent(string $data = null) {
          if (isset($data)):
            $this->_content = $data;
          endif;
        }
        public function setImage(string $data = null) {
          if (isset($data)):
            $this->_image = $data;
          endif;
        }
        public function setCreated_at(string $data = null) {
          if (isset($data)):
            $this->_created_at = $data;
          endif;
        }

        // public function __construct(array $data = null) {
        //   if ($data):
        //     $auteurctrl = new auteurControleur
        //     $auteur = $auteurctrl->findonebyid($_id) ;
        //   endif;
        // }
  

      }