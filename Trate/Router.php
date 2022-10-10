<?php

namespace LearnPHP;

class Router
{
    use Enumarable;

    private $options;
    private $routes =[];

    public function __constructor($options = [])
    {
        $this->options = $options;
    }
    public function addRoute($name, $url)
    {
        $this->routes[$name] = $url;
    }
    public function each($lambda)
    {
        foreach ($this->routes as $value){
            $lambda($value);
        }
    }
}
