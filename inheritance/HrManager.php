<?php

namespace LearnPHP;

class HrManager extends User
{
    public function getCandidates()
    {
        return [];
    }
    public function canScanUserList(): bool
    {
        return true;
    }
    public function getFullName(): string
    {
        return "{$this->lastName} {$this->firstName}";
    }
}