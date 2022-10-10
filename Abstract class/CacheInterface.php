<?php
namespace LearnPHP;

interface CacheInterface
{
    public function __constructor($options);
    public function get($key);
    public function set($key, $value);
}