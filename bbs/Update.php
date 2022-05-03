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
    <title>수정</title>
</head>
<body>
    <form action="update_ok.php" method="post">
        <input type="hidden" name="id" value='<?php echo "$id"?>'>

        <label for="title">제목</label>
        <input type="text" name="title" id="title" value='<?php echo "$title"?>'><br>

        <textarea cols="100" rows="30" name="content"><?php echo "$content"?></textarea><br>

        <input type="submit" value="등록">
    </form>

    <a href="BoardList.php">취소</a>
</body>
</html>