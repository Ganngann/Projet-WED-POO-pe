<?php

/*
    ./app/controleurs/Posts_has_tagsControleur.php
    Contrôleur des catégories
  */

namespace App\Controleurs;

use \App\Modeles\Posts_has_tagsGestionnaire;

class Posts_has_tagsControleur extends \Noyau\Classes\ControleurGenerique
{

  public function __construct()
  {
    $this->_table = 'posts_has_tags';
    parent::__construct();
  }
}
