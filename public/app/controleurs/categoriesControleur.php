<?php

/*
    ./app/controleurs/CategoriesControleur.php
    Contrôleur des catégories
  */

namespace App\Controleurs;

use \App\Modeles\CategoriesGestionnaire;

class CategoriesControleur extends \Noyau\Classes\ControleurGenerique
{

  public function __construct()
  {
    $this->_table = 'categories';
    parent::__construct();
  }
}
