<?php

namespace LearnPHP;

/**
 * @throws \Exception
 */
function myReadFile($filepath)
{
    if(!file_exists($filepath)){
        throw new \Exception("file '${filepath}' doesn't exit");
    }
}
function readFolder($folderPath)
{
    return [myReadFile($folderPath)];
}
function tryReadFolder()
{
    try {
        $bodies = readFolder("path/to/folder");
        return $bodies;
    } catch(\Exception $e){
        echo $e->getMessage() . "<br>";
        return [];
    }
}

$result = tryReadFolder();
print_r($result);