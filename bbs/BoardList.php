<?php
$host = "www.yydhsoft.com";
$dbname = "skills08";
$charset = "utf8mb4";
$user = "skills08";
$pass = "1234";

//DB접속
$db = new PDO("mysql:host={$host}; dbname={$dbname}; charset={$charset}", $user, $pass);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
</head>
<body>
    <h1>게시판</h1>
    <ul>
        <?php
            $sql = "SELECT id, title FROM board";
            $result = $db->query($sql);
            $list = $result->fetchAll(PDO::FETCH_OBJ);

            foreach ($list as $item) {
                echo "<li><a href='Board.php?id=$item->id'>$item->title</a></li>";
            }
        ?>
    </ul>

    <a href="Write.php">글쓰기</a>
</body>
</html>