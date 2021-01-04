<?php

/*
    ./app/modeles/Authors.php
    Modèle d'un Authors
  */

namespace App\Modeles;

use \App\Modeles\AuthorsControleur;

class Author extends \Noyau\Classes\ModeleGenerique
{

    private $_id = null, $_firstname,$_lastname,$_biography,$_avatar, $_created_at, $_numberOfCurencies;

    // GETTERS
    public function getId()
    {
        return $this->_id;
    }
    public function getFirstname()
    {
        return $this->_firstname;
    }
    public function getLastname()
    {
        return $this->_lastname;
    }
    public function getBiography()
    {
        return $this->_biography;
    }
    public function getAvatar()
    {
        return $this->_avatar;
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
    public function setFirstname(string $data = null)
    {
        if (isset($data)) :
            $this->_firstname = $data;
        endif;
    }
    public function setLastname(string $data = null)
    {
        if (isset($data)) :
            $this->_lastname = $data;
        endif;
    }
    public function setBiography(string $data = null)
    {
        if (isset($data)) :
            $this->_biography = $data;
        endif;
    }
    public function setAvatar(string $data = null)
    {
        if (isset($data)) :
            $this->_avatar = $data;
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


    // public function __construct($data = null) {
    //     if ($data):
    //         // var_dump($data);
    //         $this->hydrater($data);
    //     //   $this->setNumberOfCurencies($this->counter("id", "posts", "author_id", $this->_id));
    //     endif;
    //   }


}
