<?php 
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $message = "Logging in: {$username}";
    } else {
        $message = "Please log in.";
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Form</title>
</head>
<body>
    <?php 
        echo $message
    ?><br>
    <form action="form_single.php" method="post">
        Username: <input type="text" name="username" value=""><br>
        Password: <input type="password" name="password" value=""><br>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>