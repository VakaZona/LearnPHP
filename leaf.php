<?php
class Leaf{
    private $value;

    public function __construct($value = null)
    {
        $this -> value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
