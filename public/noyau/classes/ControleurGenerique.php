<?php

/*
    ./noyau/classes/ControleurGenerique.php
    Contrôleur générique
  */

namespace Noyau\Classes;

abstract class ControleurGenerique
{

  protected $_gestionnaire, $_table;

  public function __construct()
  {
    $gestionnaireName = '\App\Modeles\\' . ucfirst($this->_table) . 'Gestionnaire';
    $this->_gestionnaire = new $gestionnaireName;
  }

  public function indexAction(int $nbr = 999, int $offset = 0, string $tri = "id", string $ordre = "ASC")
  {
    $r = $this->_table;
    $$r = $this->_gestionnaire->findAll($nbr, $offset, $tri, $ordre);
    // GLOBAL $content, $title;
    // $title = "Wedding | Template";
    // ob_start();
    // var_dump($$r);

    include '../app/vues/' . $this->_table . '/index.php';
    // $content = ob_get_clean();
  }

  public function showAction($data, string $field = 'id')
  {
    $r = substr($this->_table, 0, -1);
    $methodName = 'findOneBy' . ucfirst($field);
    $$r = $this->_gestionnaire->$methodName($data);

    // GLOBAL $content, $title;
    // $title = $$r->getTitle();
    // ob_start();
    include '../app/vues/' . $this->_table . '/show.php';
    // $content = ob_get_clean();
  }

  public function countByAction($key, $fromTable, $element, $elementKey)
  {
    $r = $this->_table;
    $$r = $this->_gestionnaire->countBy($key, $fromTable, $element, $elementKey);
    if ($$r) :
      return $$r;
    endif;
  }




  // ACTION AJAX ----------------------------------------------------------------


  public function ajaxAddAction($datas, $datasTypes = null)
  {
    $r = $this->_table;
    $$r = $this->_gestionnaire->insert($datas, $datasTypes);
    if ($$r) :
      include '../app/vues/' . $this->_table . '/done.php';
    endif;
  }

  public function ajaxMoreAction(string $tri, int $nbr, int $offset = 0)
  {
    $r = $this->_table;
    $$r = $this->_gestionnaire->findAll($tri, $nbr, $offset);
    // GLOBAL $content, $title;
    // $title = "Wedding | Template";
    // ob_start();

    include '../app/vues/' . $this->_table . '/liste.php';
    // $content = ob_get_clean();
  }
}
