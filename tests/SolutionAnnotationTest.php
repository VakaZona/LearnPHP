<?php
require_once "..\solution.php";

class SolutionAnnotationTest extends \PHPUnit\Framework\TestCase
{
   /**
    * @expectedException InvalidArgumentException
    */
   public function testExceptionUsingAnnotation()
   {
        throw new \InvalidArgumentException('Some message');
   }

   public function testExceptionUsingTry()
   {
       /*try {
           throw new \InvalidArgumentException('Some message');
           $this->fail("expected exception");
       } cath (\InvalidArgumentException::$e);*/
   }
}
