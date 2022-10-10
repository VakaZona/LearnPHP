<?php
namespace LearnPHP;

require "MarkdownInterface.php";
require "Renders/HTML.php";
require "Renders/XML.php";

class Markdown implements Renders\RenderInterface, MarkdownInterface
{
    private $renderer;

    public function __construct(Renders\RenderInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    public function render($text)
    {
        return $this->renderer->render($text);
    }
}