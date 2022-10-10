<?php
namespace LearnPHP;

class DbCahe extends Cache
{
    public function get($key)
    {
        return $this->conection->get($key);
    }
    public function set($key, $value)
    {
        return $this->connection->set($key, $value);
    }
    protected function conect()
    {
        //....
    }

}