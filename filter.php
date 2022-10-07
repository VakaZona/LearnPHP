<?php 
    require '/OpenServer/domains/LearnPHP/vendor/autoload.php';
    use function Functional\select;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        
        $array = range(1,10);
        
        $result = array_filter($array, function($item){
            return $item % 2 != 0;
        });
        print_r($result);

        echo "<br>";

        $result = array_filter($array, function($key){
            return $key > 5;
        }, ARRAY_FILTER_USE_KEY);
        print_r($result);

        echo "<br>";

        $iterator = new \DirectoryIterator('..');
        $result = select($iterator, function($item){
            return $item->isDir();
        });
        print_r($result);
    ?>
</body>
</html>