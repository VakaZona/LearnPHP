<?php
namespace  LearnPHP;

interface UserInterface
{
    public function isGuest();
    public function getFullName();
}
