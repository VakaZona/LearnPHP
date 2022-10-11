<?php
namespace LearnPHP;

class Application2
{
    private $routes;
    public function __construct($routes)
    {
        $this->routes = $routes;
    }
    public function run()
    {
        $uri = $_SERVER["REQUEST_URI"];
        foreach ($this->routes as $item){
            list($route, $handler) = $item;
            $preparedRoute = preg_quote($route, '/');
            if(preg_match("/^$preparedRoute$/i", $uri)){
                echo $handler();
                return;
            }
        }
    }
}