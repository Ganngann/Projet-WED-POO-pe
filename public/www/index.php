<?php

  /*
    ./www/index.php
    DISPATCHER CENTRAL
  */

    // Chargement du fichier d'initialisation
      require_once '../noyau/init.php';

    // Chargement du routeur
    // Pour mettre du contenu dans les zones dynamiques
      require_once '../app/routeur.php';

    // Chargement du template général
    // Pour afficher les zones dynamiques
      require_once '../app/vues/template/index.php';
      
    // Fermeture de la connexion
      unset($connexion);
