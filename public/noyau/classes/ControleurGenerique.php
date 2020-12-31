<?php

  /*
    ./noyau/classes/ControleurGenerique.php
    Contrôleur générique
  */

    namespace Noyau\Classes;

      abstract class ControleurGenerique {

        protected $_gestionnaire, $_table;

        public function __construct() {
          $gestionnaireName = '\App\Modeles\\' . ucfirst($this->_table) . 'Gestionnaire';
          $this->_gestionnaire = new $gestionnaireName;
        }

        public function indexAction() {
          $r = $this->_table;
          $$r = $this->_gestionnaire->findAll('created_at', 5);
          // GLOBAL $content, $title;
          // $title = "Wedding | Template";
          // ob_start();
          // var_dump($$r);
            include '../app/vues/'. $this->_table .'/index.php';
          // $content = ob_get_clean();
        }

        public function showAction($data, string $field = 'id') {
          $r = substr($this->_table, 0, -1);
          $methodName = 'findOneBy' . ucfirst($field);
          $$r = $this->_gestionnaire->$methodName($data);

          // GLOBAL $content, $title;
          $title = $$r->getTitle();
          // ob_start();
            include '../app/vues/'. $this->_table .'/show.php';
          // $content = ob_get_clean();
        }

      }
