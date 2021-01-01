<?php

/*
    ./noyau/classes/GestionnaireGenerique.php
    Gestionnaire générique
  */

namespace Noyau\Classes;

use PDOStatement;
use PDO;

abstract class GestionnaireGenerique
{

  protected $_table, $_class;

  // METHODES CRUD
  public function findAll(string $tri, int $nbr, int $offset = 0)
  {
    $sql = "SELECT *
                  FROM `{$this->_table}`
                  ORDER BY `$tri` DESC
                  LIMIT $nbr
                  OFFSET :offset;";
    $rs = App::getConnexion()->prepare($sql);
    $rs->bindValue(':offset', $offset, \PDO::PARAM_INT);
    $rs->execute();
    $tab = $rs->fetchAll(\PDO::FETCH_ASSOC);

    return $this->fromAssocToObject($tab, $this->_class);
  }

  public function findOneById(int $id)
  {
    $sql = "SELECT *
                  FROM `{$this->_table}`
                  WHERE id = :id;";
    $rs = App::getConnexion()->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return new $this->_class($rs->fetch(\PDO::FETCH_ASSOC));
  }

  // Inserer des infos dans la db
  // $datas : Associative array contenant les infos à inserer
  // $datasTypes : Associative array contenant les criteres de validation PDO
  public function insert($datas, $datasTypes)
  {
    // implod(separateur, array) permet de transformer un array en string, avec séparateur
    // array_keys(Associativearray) permet de tranformer un array associatif en array, en ne gardant que les clés : array("clé"=>"valeur")
    $sql = "INSERT INTO `{$this->_table}` (" . implode(',', array_keys($datas)) . ")
    VALUES (:" . implode(', :', array_keys($datas)) . ");";

    $rs = App::getConnexion()->prepare($sql);
    // bindArrayValue(objetPDO, données, type de donnée) cette méthode personalisée permet de faire un bindValue de plusieures valeurs
    // sans en connaitre le nombre. je l'explique plus en détail ci dessous
    $this->bindArrayValue($rs, $datas, $datasTypes);

    return $rs->execute();
  }




  // AUTRES METHODES
  protected function fromAssocToObject(array $rs, string $class)
  {
    $tab = [];
    foreach ($rs as $r) :
      $tab[] = new $this->_class($r);
    endforeach;

    return $tab;
  }

  // Cette méthode permet de faire un bindValue de plusieures valeurs a la fois.
  // elle est issue d'une contribution sur la doccu officiele: https://www.php.net/manual/fr/pdostatement.bindvalue.php#104939
  // $rs : objetPDO
  // $array : array associatif contenant les données à binder
  // $typeArray : array associatif contenant le type de donnée PDO (facultatif)
  protected function bindArrayValue($rs, $array, $typeArray = false)
  {
    // vérifie si $rs existe et si c'est bien un objet PDO
    if (is_object($rs) && ($rs instanceof PDOStatement)) {
      // Parcours le tableau des valeurs à atribuer
      foreach ($array as $key => $value) {
        // si un type de donnée a été renseigné dans $typeArray, réalise le bindValue
        if ($typeArray) {
          $rs->bindValue(":$key", $value, $typeArray[$key]);
        } else {
          // si aucun type de donnée n'a été renseigné dans $typeArray, cherche un type de donnée qui correspond et le range dans la variable $param
          if (is_int($value))
            $param = PDO::PARAM_INT;
          elseif (is_bool($value))
            $param = PDO::PARAM_BOOL;
          elseif (is_null($value))
            $param = PDO::PARAM_NULL;
          elseif (is_string($value))
            $param = PDO::PARAM_STR;
          else
            $param = FALSE;
          // si un type de donnée correspondant à été trouvé, réalise le bindValue
          if ($param)
            $rs->bindValue(":$key", $value, $param);
        }
      }
      return $rs;
    }
  }
}
