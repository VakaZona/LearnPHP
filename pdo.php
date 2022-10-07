<?php
// Всегда ставить режим ошибок
$opt = array(
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
);
$dsn = 'mysql:dbname=pdo; host = 127.0.0.1';
$username = 'root';
$password = 'root';
$pdo = new PDO($dsn, $username, $password, $opt);
//Работа с запросами
/* $sql = "CREATE TABLE users(id integer, name varchar(30))";
$pdo -> exec($sql);
$pdo -> exec("insert into users values (3, 'adel')");
$pdo -> exec("insert into users values (7, 'migel')");
$data = $pdo->query("select * from users")->fetchAll();
print_r($data);*/
// Безопасность
// Так делать не надо
/*$id = 7;
$name = 'ada';
$pdo->exec("insert into users values($id, '$name')");*/

//SQL INJECTION Удаляет всех пользователей
/*$id = 8;
$name = "mike'); DELETE FROM users; --";
$sql = "insert into users values ($id, '$name')";
$pdo -> exec($sql);*/

// Квотирование (Безопасный метод)
/*$values = [3, 'm\'ark --'];
$data = implode(', ', array_map(function ($item) use ($pdo){
    return $pdo -> quote($item);
}, $values));
$sql = "insert into users values ($data)";
print_r($sql);
$pdo->exec($sql);
$data = $pdo->query("select * from users")->fetchAll();
print_r($data);*/
$stmt = $pdo->query("select * from users");
//print_r($stmt->fetchAll());
echo("<br>");
var_dump($stmt->fetchAll(\PDO::FETCH_ASSOC));





