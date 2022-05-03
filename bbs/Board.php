<?php
$host = "www.yydhsoft.com";
$dbname = "skills08";
$charset = "utf8mb4";
$user = "skills08";
$pass = "1234";

//DB접속
$db = new PDO("mysql:host={$host}; dbname={$dbname}; charset={$charset}", $user, $pass);

$id = $_GET['id'];

$sql = "SELECT title, content FROM board WHERE id=$id";
$result = $db->query($sql);
$list = $result->fetchAll(PDO::FETCH_OBJ);

foreach ($list as $item) {
    $title = $item->title;
    $content = $item->content;
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물</title>
</head>
<body>
    <h1><?php echo $title ?></h1>

    <p><?php echo $content ?></p>

    <a href='Update.php<?php echo "?id=$id"?>'>수정</a>
    <a href='Delete.php<?php echo "?id=$id"?>'>삭제</a>
    <a href="BoardList.php">목록</a>
</body>
</html>