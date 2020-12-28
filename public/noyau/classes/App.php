<?php

  /*
    ./noyau/classes/App.php
    Classe de l'application
  */

    namespace Noyau\Classes;

      abstract class App {

        private static $_connexion = null, $_root, $_start = false;

        // GETTERS
        public static function getConnexion() {
          return SELF::$_connexion;
        }
        public static function getRoot() {
          return SELF::$_root;
        }

        // SETTERS
        private static function setConnexion() {
          $dsn = "mysql:host=".HOSTNAME.";dbname=".DBNAME;
          $param = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

          try { 
              SELF::$_connexion = new \PDO($dsn,USERNAME,USERPWD,$param);
          } 
          catch (\PDOException $e) {
              die("Problème de connexion à la base de données...");
          }
        }
        private static function setRoot() {
          $url = explode('index.php', $_SERVER['SCRIPT_NAME']);
          SELF::$_root = 'http://' . $_SERVER['HTTP_HOST'] . $url[0];
        }

        // AUTRES METHODES
        public static function start() {
          if (SELF::$_start === false) {
            session_start();
            SELF::setRoot();
            SELF::setConnexion();
            SELF::$_start = true;
          }
        }
        public static function close() {
          SELF::$_connexion = null;
        }

      }