<?php 
    require '/OpenServer/domains/LearnPHP/vendor/autoload.php';
    use function Functional\map;
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
        $map = ['key' => 'value', 'another-key' => 'another-value'];

        $result = array_map(function ($item){
            return $item **2;
        }, $array);
        print_r($result);
        
        echo '<br/>';

        $result = array_map(function($key, $value){
            return $key . $value;
        }, array_keys($map), $map);
        print_r($result);

        echo "<br>";
        //Functional\map Не работает :( Обманул все работает
        $iterator = new \DirectoryIterator('..');
        $result = map($iterator, function($info){
            return $info->getFilename();
        });
        print_r($result);
    ?>
</body>
</html>