<?php
namespace LearnPHP;

class Application
{
    private $handlers =[];
    private $environment;
    private $name;

    public function __construct($name, $environment)
    {
        $this->name =$name;
        $this->environment = $environment;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function addHandlers($url, $func)
    {
        $this->handlers[$url] = $func;
    }

    public function hasHandlers(): bool
    {
        return !empty($this->handlers);
    }

    public function isTest(): bool
    {
        return "test" === $this->environment;
    }
}

