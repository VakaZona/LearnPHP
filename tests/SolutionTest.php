<?php

namespace App;

use PhpParser\Builder\Class_;

require_once "..\solution.php";

Class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testIsOdd(){
        $this->assertTrue(Solution\isOdd(1));
        $this->assertFalse(Solution\isOdd(6));
    }
}