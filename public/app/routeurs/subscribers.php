<?php

/*
    ./app/routeurs/subscribers.php
    ROUTEUR DES subscribers
  */

$ctrl = new App\Controleurs\subscribersControleur();

switch ($_GET['subscribers']):
  case 'add':
    // insertion d'un email dans la db
    // PATTERN: index?subscribers=add
    // CTRL: subscribersControleur
    // ACTION: addAction

    // ajout des champs manquants dans la variable $_POST (champ obligatoir pour la db)
    $_POST['created_at'] = date("Y-m-d H:i:s");

    // appel de la fonction addAction(données introduites dans la db, format de donnée attendu par bindValue()(facultatif))
    $ctrl->addAction($_POST, array('email' => PDO::PARAM_STR, 'created_at' => PDO::PARAM_STR));
    break;

// case 'confirm':
//   // DETAIL D'UN POST
//   // PATTERN: index?posts=show&id=x
//   // CTRL: postsControleur
//   // ACTION: show
//   $ctrl->confirmAction('created_at', 5, $_GET['offset']);
//   break;
endswitch;
