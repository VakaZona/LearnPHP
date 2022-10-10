<?php

namespace LearnPHP\Renders;

require_once "RenderInterface.php";

class HTML implements RenderInterface
{
    public function render($text)
    {
        return "HTML";
    }
}