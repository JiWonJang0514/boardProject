<?php
session_start();

$host = "www.yydhsoft.com";
$dbname = "skills08";
$charset = "utf8mb4";
$user = "skills08";
$pass = "1234";

//DB접속
$db = new PDO("mysql:host={$host}; dbname={$dbname}; charset={$charset}", $user, $pass);

$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "SELECT id, password FROM users";
$result = $db->query($sql);
$list = $result->fetchAll(PDO::FETCH_OBJ);
//print_r($list);

$login = 0;
foreach ($list as $item) {
    if ($id == $item->id && $pw == $item->password) {
        $login = 1;
        echo $id . "님 로그인 되었습니다.<br>";
        echo "<a href='BoardList.php'>게시판 페이지</a>";
        $_SESSION['user_id'] = $id;
    }
}
if ($login != 1) {
    $login = 0;
    echo "아이디와 비밀번호가 잘못되었습니다.<br>";
    echo "<a href='index.php'>다시 로그인</a>";
}
?>