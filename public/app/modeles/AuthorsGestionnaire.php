<?php

/*
    ./app/modeles/uthorsModele.php
    Gestionnaire des uthors
  */

namespace App\Modeles;

use \Noyau\Classes\App;

class AuthorsGestionnaire extends \Noyau\Classes\GestionnaireGenerique
{

  public function __construct()
  {
    $this->_table = 'authors';
    parent::__construct();
  }
}
