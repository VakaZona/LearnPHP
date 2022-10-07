<?php
require_once "..\leaf.php";

class LeafTest extends \PHPUnit\Framework\TestCase
{
    public function testGetValue()
    {
        $value = 100;
        $leaf = new Leaf($value);
        $this ->assertEquals($value, $leaf->getValue());
    }
}