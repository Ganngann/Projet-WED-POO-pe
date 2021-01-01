<?php

/*
    ./app/modeles/Categorie.php
    Modèle d'une Categorie
  */

namespace App\Modeles;

use \App\Modeles\CategoriesControleur;

class Categorie extends \Noyau\Classes\ModeleGenerique
{

    private $_id = null, $_name, $_created_at, $_numberOfCurencies;

    // GETTERS
    public function getId()
    {
        return $this->_id;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function getCreated_at()
    {
        return $this->_created_at;
    }
    public function getNumberOfCurencies()
    {
        return $this->_numberOfCurencies;
    }

    // SETTERS
    public function setId(int $data = null)
    {
        if (isset($data)) :
            $this->_id = $data;
        endif;
    }
    public function setName(string $data = null)
    {
        if (isset($data)) :
            $this->_name = $data;
        endif;
    }
    public function setCreated_at(string $data = null)
    {
        if (isset($data)) :
            $this->_created_at = $data;
        endif;
    }
    public function setNumberOfCurencies(string $data = null)
    {
        if (isset($data)) :
            $this->_numberOfCurencies = $data;
        endif;
    }


    public function __construct(array $data = null) {
        if ($data):
          $this->hydrater($data);
          $this->counter();
        endif;
      }

      private function counter() {
          $ctrl = new \App\Controleurs\CategoriesControleur();
          $nbr = $ctrl->countByAction("id", "posts", "categorie_id", $this->getId());
          $this->setNumberOfCurencies($nbr["occurences"]);
      }
}
