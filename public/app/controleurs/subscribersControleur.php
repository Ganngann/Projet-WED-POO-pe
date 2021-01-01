<?php

/*
    ./app/controleurs/postsControleur.php
    Contrôleur des posts
  */

namespace App\Controleurs;

use \App\Modeles\SubscribersGestionnaire;

class SubscribersControleur extends \Noyau\Classes\ControleurGenerique
{

  public function __construct()
  {
    $this->_table = 'subscribers';
    parent::__construct();
  }



  // public function addAction(\PDO $connexion, string $email)
  // {
  //   // Je demande au modèle d'ajouter un abonne
  //   include_once '../app/modeles/abonnesModele.php';
  //   $id = \App\Modeles\AbonnesModele\insert($connexion, $_POST['email']);
  //   // Je redirige vers la liste
  //   header('location: ' . BASE_URL . 'confirmation');
  // }



  // public function confirmAction()
  // {
  //   //Je charge la vue show dans $content
  //   global $content, $titre;
  //   $title = 'Newsletter';
  //   ob_start();
  //   include '../app/vues/abonnes/confirm.php';
  //   $content = ob_get_clean();
  // }
}
