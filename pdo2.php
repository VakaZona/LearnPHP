 Подготовленный запросы
<?php
$opt = array(
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
);
$dsn = 'mysql:dbname=pdo; host = 127.0.0.1';
$username = 'root';
$password = 'root';
$pdo = new PDO($dsn, $username, $password, $opt);
//$pdo-> exec("create table users (id integer auto_increment primary key , name varchar(10), role varchar(10))");
$data = [
    [1, 'john', 'member'],
    [2, 'mike', 'admin'],
    [3, 'adel', 'member']
];
$stmt = $pdo->prepare("insert into users values (?, ?, ?)");
foreach ($data as $value){
  $stmt->execute($value);
};

$stmt = $pdo->prepare('select name from users where role = ? and name = ?');
$stmt->execute(['member', '']);
print_r($stmt->fetchAll());