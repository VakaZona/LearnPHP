<?php

namespace LearnPHP;

interface MemberInterface
{
    public function __constructor($id, $firstName, $lastName);
    public function getId();
    public function canScanUserList();
}