<?php

  /*
    ./noyau/connexion.php
    Création d'une instance PDO $connexion
  */

    $dsn = "mysql:host=".HOSTNAME.";dbname=".DBNAME;
    $param = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

    try { 
        $connexion = new PDO($dsn,USERNAME,USERPWD,$param);
    } 
    catch (PDOException $e) {
        die("Problème de connexion à la base de données...");
    }
