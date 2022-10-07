<?php 
    header("HTTP 1.1/ 404 Not Found");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headers</title>
</head>
<body>
    <pre>
        <?php 
            print(headers_list());
        ?>
    </pre>
</body>
</html>