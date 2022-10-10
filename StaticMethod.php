<?php

namespace LearnPHP;

class Parser
{
    public static $formats = ['xml', 'html', 'json'];

    public static function getStaticValueFromStatic()
    {
        return self::$formats;
    }
    public function getStaticValue()
    {
        return self::$formats;
    }
    public  function callStaticFunction()
    {
        return self::getStaticValueFromStatic();
    }
}

print_r(Parser::$formats);
echo "<br>";
print_r(Parser::getStaticValueFromStatic());
echo "<br>";

$parser = new Parser();
print_r($parser->getStaticValue());
echo "<br>";
print_r(($parser->callStaticFunction()));
echo "<br>";