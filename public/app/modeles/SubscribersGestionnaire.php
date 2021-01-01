<?php

  /*
    ./app/modeles/subscribersModele.php
    Gestionnaire des Subscribers
  */

    namespace App\Modeles;
    use \Noyau\Classes\App;

      class SubscribersGestionnaire extends \Noyau\Classes\GestionnaireGenerique {

        public function __construct() {
          $this->_table = 'subscribers';
          $this->_class = '\App\Modeles\Subscribers';
        }
        
      }
