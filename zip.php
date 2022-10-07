<?php 
    require '/OpenServer/domains/LearnPHP/vendor/autoload.php';
    use function Functional\zip;
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
        $result = array_map(null, range(1,3), range(11,13));
        print_r($result);
        echo "<br>";

        $result = zip(range(1,3), range(11,13));
        print_r($result);
        echo "<br>";

        $result = array_map(function($a,$b){
            return $a+$b;
        }, range(1,5), range(11,15));

        print_r($result);
        echo "<br>";
    ?>
</body>
</html>