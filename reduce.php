<?php 
    require '/OpenServer/domains/LearnPHP/vendor/autoload.php';
    use function Functional\reduce_left;

    $array = [1,3,2,9,8,5,4];

    //Нахождение макс
    $result = array_reduce($array, function($acc, $item){
        return $item > $acc ? $item : $acc;
    }, $array[0]);
    print_r("Max = " . $result);
    echo "<br>";

    $result = reduce_left($array, function($item, $index, $collection, $acc){
        return $item > $acc ? $item : $acc;
    }, $array[0]);

    print_r("Max = " . $result);
?>