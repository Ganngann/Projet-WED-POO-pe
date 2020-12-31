<?php

/*
    ./noyau/classes/Utils.php
    Classes des utilitaires
  */

namespace Noyau\Classes;

abstract class Utils
{

  public static function slugify(string $str)
  {
    return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
  }

  public static function tronquer(string $chaine, int $nbreCaracteres = 200): string
  {
    if (strlen($chaine) > $nbreCaracteres) :
      $positionEspace = strpos($chaine, ' ', $nbreCaracteres);
      return substr($chaine, 0, $positionEspace);
    else :
      return $chaine;
    endif;
  }

  public static function datify(string $date, string $format)
  {
    return date_format(date_create($date), $format);
  }
}
