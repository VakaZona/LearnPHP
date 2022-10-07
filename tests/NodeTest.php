<?php
require_once "..\Node.php";

class NodeTest extends \PHPUnit\Framework\TestCase
{
    public function testGetChildren()
    {
        $tree = new Node();
        $leaf = new Leaf();
        $node = new Node();
        // Начальное условие проверяем что ноль
        $children = $tree->getChildren();
        $this->assertCount(0,$children);

        $tree->addChild($leaf);
        $children = $tree->getChildren();
        $this->assertCount(1,$children);
        $this->assertContains($leaf, $children);

        $tree->addChild($node);
        $children = $tree->getChildren();
        $this->assertCount(2, $children);
        $this->assertContains($leaf, $children);
        $this->assertContains($node, $children);
    }

    public function testRemoveChildren()
    {
        $tree = new Node();
        $leaf = new Leaf();

        $tree->addChild($leaf);
        $tree->removeChildren();
        $children = $tree->getChildren();
        $this->assertEmpty($children);
    }

}
