<?php
namespace LearnPHP;

require_once 'Template.php';

use function LearnPHP\Template\render;

$html = render('index.phtml', [
    'site' => 'hexlet.io',
    'subprojects' => ['map.hexlet.io', 'battle.hexlet.io']
]);
print_r($html);
