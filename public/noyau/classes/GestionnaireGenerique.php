<?php

  /*
    ./noyau/classes/GestionnaireGenerique.php
    Gestionnaire générique
  */

    namespace Noyau\Classes;

      abstract class GestionnaireGenerique {

        protected $_table, $_class;

        // METHODES CRUD
        public function findAll(string $tri, int $nbr, int $offset = 0) {
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

        public function findOneById(int $id) {
          $sql = "SELECT *
                  FROM `{$this->_table}`
                  WHERE id = :id;";
          $rs = App::getConnexion()->prepare($sql);
          $rs->bindValue(':id', $id, \PDO::PARAM_INT);
          $rs->execute();
          return new $this->_class($rs->fetch(\PDO::FETCH_ASSOC));
        }
        // AUTRES METHODES
        protected function fromAssocToObject(array $rs, string $class) {
          $tab = [];
          foreach ($rs as $r):
            $tab[] = new $this->_class($r);
          endforeach;
          
          return $tab;
        }
        
      }
