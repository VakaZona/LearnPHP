<?php
namespace LearnPHP;

require "Markdown.php";

$renderer = new Renders\HTML();
$markdown = new Markdown($renderer);

echo $markdown->render("text");