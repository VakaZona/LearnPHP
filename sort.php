<?php
    require '/OpenServer/domains/LearnPHP/vendor/autoload.php';
    use function Functional\sort as fsort;

    $collection = ['first' => 'dog', 'second' => 'cat', 'third' => 'bird'];
    $collection2 = ['first' => 'dog', 'second' => 'cat', 'third' => 'bird'];

    usort($collection2, function($left, $right){
        return strcmp($left, $right);
    });
    print_r($collection2);
    echo "<br>";

    $result = fsort($collection, function($left, $right){
        return strcmp($left, $right);
    });
    print_r($result);
    echo "<br>";

    //Сохраняем ключи
    $result = fsort($collection, function($left, $right){
        return strcmp($left, $right);
    }, true);
    print_r($result);
    echo "<br>";
?>