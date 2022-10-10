<?php

namespace LearnPHP;

trait Enumarable
{
    function count()
    {
        $count = 0;
        $this->each(function ($element) use (&$count){
            $count++;
        });
        return$count;

    }
    function isMember($obj)
    {
        $isMember = false;
        $this->each(function ($element) use ($obj, &$isMember){
            if ($element == $obj){
                $isMember = true;
            }
        });
        return $isMember;
    }

}
