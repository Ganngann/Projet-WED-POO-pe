<?php

/*
    ./app/modeles/CategoriesGestionnaire.php
    Gestionnaire des catégories
  */

namespace App\Modeles;

use \Noyau\Classes\App;

class CategoriesGestionnaire extends \Noyau\Classes\GestionnaireGenerique
{

    public function __construct()
    {
        $this->_table = 'categories';
        parent::__construct();
    }
}
