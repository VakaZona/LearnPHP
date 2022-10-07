<?php
require_once "leaf.php";

class Node
{
    private array $children = [];

    public function addChild($child)
    {
        $this->children[] = $child;
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function removeChildren()
    {
        return $this->children = [];
    }
}
