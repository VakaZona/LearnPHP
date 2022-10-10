<?php

namespace LearnPHP;

abstract class Cache implements CacheInterface
{
    protected $options;

    public function __constructor($options)
    {
        $this->options = $options;
        $this->connect();
    }

    abstract protected function conect();
}