<?php

  /*
    ./app/controleurs/postsControleur.php
    Contrôleur des posts
  */

    namespace App\Controleurs;
    use \App\Modeles\AuthorsGestionnaire;

      class AuthorsControleur extends \Noyau\Classes\ControleurGenerique {

        public function __construct() {
          $this->_table = 'authors';
          parent::__construct();
        }



      }

