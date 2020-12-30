<?php

/*
    ./noyau/classes/Template.php
    Classe du template
  */

namespace Noyau\Classes;

abstract class Template
{

  private static $_zone = null;


  public static function startZone()
  {
    ob_start();
  }

  public static function stopZone(string $zone)
  {
    global $$zone;
    $$zone = ob_get_clean();
  }

  public static function getZone(string $zone) {
    return SELF::$_zone($zone);
  }


  public static function addZones($zones)
  {
    foreach ($zones as $zone) :
      SELF::$_zone($zone) = '';

    endforeach;
  }
}
