<?php
$host = "www.yydhsoft.com";
$dbname = "skills08";
$charset = "utf8mb4";
$user = "skills08";
$pass = "1234";

//DB접속
$db = new PDO("mysql:host={$host}; dbname={$dbname}; charset={$charset}", $user, $pass);

$id = $_POST['id'];
$name = $_POST['name'];
$addr = $_POST['addr'];
$pw = $_POST['pw'];

$sql = "INSERT INTO users(`id`, `password`, `name`, `addr`) VALUES('$id', '$pw', '$name', '$addr')";
$db->exec($sql);

//리다이렉션
header("Location: index.php");

?>