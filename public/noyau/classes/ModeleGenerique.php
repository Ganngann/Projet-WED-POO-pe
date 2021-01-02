<?php

/*
    ./noyau/classes/ModeleGenerique.php
    Modèle générique avec un hydrateur
  */

namespace Noyau\Classes;

abstract class ModeleGenerique
{

  // CONSTRUCTEUR
  public function __construct(array $data = null)
  {
    if ($data) :
      $this->hydrater($data);
    endif;
  }

  // AUTRES METHODES
  public function hydrater(array $data = null)
  {
    if ($data) :
      foreach ($data as $propriete => $valeur) :
        $nomMethode = 'set' . ucfirst($propriete);
        if (method_exists($this, $nomMethode)) :
          $this->$nomMethode($valeur);
        endif;
      endforeach;
    endif;
  }

  public function counter($key, $fromTable, $element, $elementKey)
  {
    $ct = '\App\Controleurs\\' . ucfirst(substr($fromTable, 0)) . 'Controleur';
    $ctrl = new $ct;
    $nbr = $ctrl->countByAction($key, $fromTable, $element, $elementKey);
    return $nbr["occurences"];
  }
}
