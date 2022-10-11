<?php
namespace LearnPHP;
require_once "Base.php";

class Child extends Base
{
    public static function who()
    {
        echo __CLASS__ . "<br>";
    }
}