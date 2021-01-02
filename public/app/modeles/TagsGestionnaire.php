<?php

/*
    ./app/modeles/TagsGestionnaire.php
    Gestionnaire des Tags
  */

namespace App\Modeles;

use \Noyau\Classes\App;

class TagsGestionnaire extends \Noyau\Classes\GestionnaireGenerique
{

    public function __construct()
    {
        $this->_table = 'tags';
        parent::__construct();
    }
}
