<?php

namespace LearnPHP;

class User implements UserInterface, MemberInterface
{
    private $id;
    protected $firstName;
    protected $lastName;

    public function __constructor($id, $firstName, $lastName)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    final public function isGuest(): bool
    {
        return false;
    }
    final public function getId()
    {
        $this->id;
    }
    public function getFullName(): string
    {
        return $this->firstName . " " . $this->lastName;
    }
    public function canScanUserList(): bool
    {
        return false;
    }
}