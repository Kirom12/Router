<?php
/**
 * From a tutoriel of grafikart
 * https://www.grafikart.fr/tutoriels/php/router-628
 */

require 'vendor/autoload.php';

$router = new App\Router\Router($_GET['url']);

/**
 * Use $router->get/post('url', 'controller#method', 'name');
 * or
 * Use $router->get/post('url', function(){});
 */
// Exemple :
// $router->get('/posts/:id', 'Posts#show');
// $router->post('/posts/:id', 'Posts#new');

$router->get('/', 'Posts#index', 'home');
$router->get('/posts', 'Posts#listPosts');

// $router->get('/posts/:id-:slug', function($id, $slug) use ($router) { 
// 	echo $router->url('posts.show', ['id' => 1, 'slug' => 'hello-world']);
// }, 'posts.show')->with('id', '[0-9]+')->with('slug', '[a-z\-0-9]+');


$router->run();