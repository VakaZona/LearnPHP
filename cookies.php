<?php
    $name = "test";
    $value = 123;
    $expire = time() + (60*60*24*7); // Неделя времени 
    //setcookie($name, $value, $expire);
    // Лучший сброс 
    setcookie($name, null, time()-3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
        <?php
            $test = isset($_COOKIE['test']) ? $_COOKIE['test'] : "Cokie deleted";
            
            echo $test;
        ?>
</body>
</html>