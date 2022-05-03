<?php
$host = "www.yydhsoft.com";
$dbname = "skills08";
$charset = "utf8mb4";
$user = "skills08";
$pass = "1234";

//DB접속
$db = new PDO("mysql:host={$host}; dbname={$dbname}; charset={$charset}", $user, $pass);

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

$sql = "UPDATE board SET title=$title, content=$content WHERE id=$id";
$db->exec($sql);

//리다이렉션
header("Location: BoardList.php");
?>