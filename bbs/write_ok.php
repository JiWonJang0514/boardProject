<?php
$host = "www.yydhsoft.com";
$dbname = "skills08";
$charset = "utf8mb4";
$user = "skills08";
$pass = "1234";

//DB접속
$db = new PDO("mysql:host={$host}; dbname={$dbname}; charset={$charset}", $user, $pass);

//$_POST[''] name을 쓴다
$title = $_POST['title'];
$content = $_POST['content'];

//id: AUTO_INCREMENT
$sql = "INSERT INTO board(`title`, `content`) VALUES('$title', '$content')";
$db->exec($sql);

//리다이렉션
header("Location: BoardList.php");
?>