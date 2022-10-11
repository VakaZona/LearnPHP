<?php
namespace LearnPHP;

$handle = fopen($filepath, "r");

try {
    $data = fread($handle, filesize($filepath));

} finally {
    fclose($handle);
}