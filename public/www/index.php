<?php

  /*
    ./www/index.php
    DISPATCHER CENTRAL
  */

    // Chargement du fichier d'initialisation
      require_once '../app/config/parametres.php';
      require_once '../vendor/autoload.php';

    // Démarrage de l'application
      \Noyau\Classes\App::start();

    // Chargement du routeur
    // Pour mettre du contenu dans les zones dynamiques
      require_once '../app/routeur.php';

    // Chargement du template général
    // Pour afficher les zones dynamiques
      require_once '../app/vues/template/index.php';
      
    // Clôture de l'application
      \Noyau\Classes\App::close();
