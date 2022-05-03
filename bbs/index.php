<?php
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = "";
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>
    <?php if ($user_id == "") : ?>
        <form action="login_ok.php" method="post">
            <label for="id">ID</label>
            <input type="text" name="id" id="id"><br>
            <label for="pw">PW</label>
            <input type="password" name="pw" id="pw"><br>

            <input type="submit" value="로그인">
        </form>

        <a href="Join.php">회원가입</a>
    <?php else : ?>
        <?php echo "$user_id 님 어서오세요.<br>"; ?>
        <a href="BoardList.php">게시판 페이지</a><br>
        <a href="logout.php">로그아웃</a>
    <?php endif; ?>
</body>
</html>