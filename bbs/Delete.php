<?php
$host = "www.yydhsoft.com";
$dbname = "skills08";
$charset = "utf8mb4";
$user = "skills08";
$pass = "1234";

//DB접속
$db = new PDO("mysql:host={$host}; dbname={$dbname}; charset={$charset}", $user, $pass);

$id = $_GET['id'];

$sql = "DELETE FROM board WHERE id=$id";
$db->query($sql);

//리다이렉션
header("Location: BoardList.php");

?>