<?php

/*
    ./noyau/classes/Template.php
    Classe du template
  */

namespace Noyau\Classes;

abstract class Template
{

  // private static $_something = null;

  // // GETTERS
  // public static function getSomething() {
  //   return SELF::$_something;
  // }

  // // SETTERS
  // private static function setSomething() {
 
  // }


  public static function startZone()
  {
    ob_start();
  }

  public static function stopZone(string $zone)
  {

    global $$zone;
    // var_dump($$zone);die; 

    $$zone = ob_get_clean();
    // var_dump($$zone);die; 

  }

  public static function addZones($zones)
  {
    foreach ($zones as $zone) :
      $$zone = '';
    // var_dump($title);die; 

    endforeach;
  }
}
