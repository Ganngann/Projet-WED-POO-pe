<?php

/*
    ./app/modeles/Tags.php
    Modèle d'une Tags
  */

namespace App\Modeles;

use \App\Modeles\TagsControleur;

class Tag extends \Noyau\Classes\ModeleGenerique
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
          $this->setNumberOfCurencies($this->counter("post_id", "posts_has_tags", "tag_id", $this->_id));
        endif;
      }


}
