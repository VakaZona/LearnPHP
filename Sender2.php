<?php
namespace Theory;

use function PHPUnit\Framework\returnArgument;

class Sender2
{
    public $http;

    public function __construct($http)
    {
        $this->http = $http;
    }
    public function send($msg)
    {
        return $this->http->post($msg, []);
    }
}
