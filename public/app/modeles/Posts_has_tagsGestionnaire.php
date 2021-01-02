<?php

/*
    ./app/modeles/Posts_has_tagsGestionnaire.php
    Gestionnaire des Posts_has_tags
  */

namespace App\Modeles;

use \Noyau\Classes\App;

class Posts_has_tagsGestionnaire extends \Noyau\Classes\GestionnaireGenerique
{

    public function __construct()
    {
        $this->_table = 'posts_has_tags';
        parent::__construct();
    }
}
