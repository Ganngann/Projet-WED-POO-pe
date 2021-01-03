<?php

/*
    ./app/routeur.php
    ROUTEUR PRINCIPAL
    Charge le contrôleur et lance l'action qui correspond à ce qui se passe dans l'URL
  */

// include_once '../app/routeurs/public.php';

// var_dump($_GET);
// $url = explode("index.php", $_GET['url']);
// var_dump($url);
// die;

$router = new Noyau\Classes\Router($_GET['url']);

$router->get('/', function () {
  $ctrl = new App\Controleurs\PostsControleur();
  $ctrl->indexAction(5, 0, 'created_at',"DESC");
});
// $router->get('/posts', function () {
//   echo 'Tous les article';
// });
// die;

$router->get('/posts/:id/:slug', function ($id, $slug) use ($router) {
  $ctrl = new App\Controleurs\PostsControleur();
  $ctrl->showAction($id);
  // echo $router->url('posts.show', ['id' => 1, 'slug' => 'Salut-les-gens']);
}, 'posts.show')->with('id', '[0-9]+')->with('slug', '[a-z\-0-9]+');


// $router->get('/posts/:id', "Posts#show");
// $router->post('/posts/:id', function ($id) {
//   echo 'Poster l\'Article ' . $id . '<pre>' . print_r($_POST, true) . '</pre>';
// });

$router->run();
