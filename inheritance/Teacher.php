<?php

namespace LearnPHP;

class Teacher extends User
{
    public function GetCourses()
    {
        return [];
    }
    public function getFullName(): string
    {
        return "Teacher" . parent::getFullName();
    }
}