<?php

namespace LearnPHP;

require_once 'Application2.php';

$routes = [
    ['/', function(){
        return '<p> Main page</p>';
    }],
    ['/sign_in', function(){
        return 'you signed in';
    }]
];

$app = new Application2($routes);
$app->run();
