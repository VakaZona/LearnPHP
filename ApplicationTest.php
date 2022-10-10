<?php
namespace LearnPHP;

require "Application.php";

$app = new Application("name", "development");
var_dump($app->getName());
$app->setName("name2");
var_dump($app->getName());