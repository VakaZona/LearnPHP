<?php

namespace LearnPHP;

require_once 'Enumarable.php';
require_once 'Router.php';

$router = new Router();
$router->addRoute('root', '/');
$router->addRoute('users', '/users');
$router->addRoute('new-users', '/users/new');
$router->addRoute('new-photos', '/users/{id}/photos');
$router->addRoute('new-users-photos', '/users/{id}/photos/new ');

echo "Routes count :  {$router->count()}<br>";
echo "Is `/users` a member? : {$router->isMember('/users')} <br>";
echo "Is `/photos` a member? : {$router->isMember('/photos')} <br>";
