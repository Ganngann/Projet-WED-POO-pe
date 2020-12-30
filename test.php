<?php
echo("hello");


$zones = array('title','content1');

abstract class Template
{

    private static $_zone = null;


  // GETTERS
  public static function getZone(string $zone) {
    return SELF::$_zone[$zone];
  }

  // SETTERS
  private static function setZone(string $zone, string $content = '') {
    SELF::$_zone[$zone] = $content;
  }

  public static function addZones($zones)
  {
    foreach ($zones as $zone) :
        SELF::setZone($zone);
    endforeach;
  }
}


Template::addZones($zones);

echo(Template::getZone("title"));
echo(Template::getZone("content1"));