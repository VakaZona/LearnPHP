<?php

namespace LearnPHP;

class Consts
{
    const VERSION = '0.9.1';
    public function getVersion()
    {
        return self::VERSION;
    }
}
//Если хотим получить внешне то echo Application::VERSION
