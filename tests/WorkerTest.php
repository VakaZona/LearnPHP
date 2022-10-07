<?php
namespace Theory;
require_once "..\Sender.php";

class WorkerTest extends \PHPUnit\Framework\TestCase
{
    private $stub;

    public function setUp(): void
    {
        $this->stub = $this->getMockBuilder('Theory\Sender')
            ->setMethods(['send'])
            ->getMock();
    }
    public function testFreshStub()
    {
        $this->assertEquals(null, $this->stub->send());
    }
    public function testStub()
    {
        $this->stub->method('send')
            ->willReturn(true);

        $this->assertTrue($this->stub->send());
    }
    public function testSub2()
    {
        $this->stub->method('send')
            ->will($this->returnArgument(0));
        $this->assertEquals('foo', $this->stub->send('foo'));
        $this->assertEquals('bar', $this->stub->send('bar'));
    }
}
