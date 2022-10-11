<?php
namespace LearnPHP;

class Base
{
    public static function who()
    {
        echo __CLASS__ . "<br>";
    }
    public static function test()
    {
        self::who();
        static::who();
    }
}