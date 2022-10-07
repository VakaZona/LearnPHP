<?php

namespace Theory;

require_once '..\Http.php';
require_once '..\Sender2.php';

class Sender2Test extends \PHPUnit\Framework\TestCase
{
    public function testSend()
    {
        $msg = 'hello world';
        $http = $this->getMockBuilder('Http')
            ->setMethods(['post'])
            ->getMock();
        $http->expects($this->once())
            ->method('post')
            ->with(
                $this->equalTo($msg),
                $this->anything()
            );
        $sender = new Sender2($http);
        $sender->send($msg);
    }
}
