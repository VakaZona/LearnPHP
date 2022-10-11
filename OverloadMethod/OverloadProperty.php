<?php

namespace LearnPHP;

class DynamicProps
{
    private $data = [];

    private $declared = 1;
    private $hidden = 2;

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function getHidden()
    {
        return $this->hidden;
    }
}

$obj = new DynamicProps();
$obj->customKey = 'value';
echo $obj->customKey;
echo $obj->getHidden();

