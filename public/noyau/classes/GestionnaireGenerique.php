<?php

  /*
    ./noyau/classes/GestionnaireGenerique.php
    Gestionnaire générique
  */

    namespace Noyau\Classes;

      abstract class GestionnaireGenerique {

        protected $_table, $_class;

        // METHODES CRUD
        public function findAll(string $tri, int $nbr) {
          $sql = "SELECT *
                  FROM `{$this->_table}`
                  ORDER BY `$tri` DESC
                  LIMIT $nbr;";
          $rs = App::getConnexion()->prepare($sql);
          $rs->execute();
          $tab = $rs->fetchAll(\PDO::FETCH_ASSOC);

          return $this->fromAssocToObject($tab, $this->_class);
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
