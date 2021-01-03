<?php

/*
    ./app/routeur.php
    ROUTEUR PRINCIPAL
    Charge le contrôleur et lance l'action qui correspond à ce qui se passe dans l'URL
  */

$router = new Noyau\Classes\Router($_GET['url']);

// ROUTE DE L'INDEX DES POSTS
// PATTERN: /
// CTRL: PostsControleur
// ACTION: index

// cette premiere technique execute l'action avec les arguments par défaut.
// $router->get('/',"Posts#indexAction");

//  cette deuxiemme technique permet d'executer l'action avec des arguments.
$router->get('/', function () {
  $ctrl = new App\Controleurs\PostsControleur();
  $ctrl->indexAction(5, 0, 'created_at', "DESC");
});


$router->get('/posts/:id/:slug', "Posts#showAction")->with('id', '[0-9]+')->with('slug', '[a-z\-0-9]+');



$router->get('/ajaxMoreAction', function () {
  // echo("coucou");
  $ctrl = new App\Controleurs\PostsControleur();
  $ctrl->ajaxMoreAction(5, $_GET['offset'], 'created_at', "DESC");
});


// insertion d'un email dans la db
// PATTERN: /ajaxSubscribersAdd
// CTRL: subscribersControleur
// ACTION: ajaxAddAction
$router->post('/ajaxSubscribersAdd', function () {
  $ctrl = new App\Controleurs\SubscribersControleur();
  // ajout des champs manquants dans la variable $_POST (champ obligatoir pour la db)
  $_POST['created_at'] = date("Y-m-d H:i:s");
  // appel de la fonction ajaxAddAction(données introduites dans la db, format de donnée attendu par bindValue()(facultatif))
  $ctrl->ajaxAddAction($_POST, array('email' => PDO::PARAM_STR, 'created_at' => PDO::PARAM_STR));
});



$router->run();
