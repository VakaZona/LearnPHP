<?php

function foo($arg)
{
    if (is_string($arg)){
        return -1;
    }
    return;
}

function bar($arg)
{
    if (-1 == foo($arg)){
        return -1;
    }

    return;
}
echo bar("foo");
