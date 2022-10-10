<?php
namespace LearnPHP;

interface MarkdownInterface
{
    public function __construct(Renders\RenderInterface $render);
}