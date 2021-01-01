<?php

/*
    ./app/modeles/postsModele.php
    Gestionnaire des posts
  */

namespace App\Modeles;

use \Noyau\Classes\App;

class PostsGestionnaire extends \Noyau\Classes\GestionnaireGenerique
{

  public function __construct()
  {
    $this->_table = 'posts';
    parent::__construct();
  }
}
