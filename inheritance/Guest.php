<?php

namespace LearnPHP;

final class Guest implements UserInterface
{
    public function getFullName()
    {

        return 'Guest';
    }

    public function isGuest()
    {
        return true;
    }
}