<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기</title>
</head>
<body>
    <form action="write_ok.php" method="post">
        <label for="title">제목</label>
        <input type="text" name="title" id="title"><br>

        <textarea cols="100" rows="30" name="content"></textarea><br>

        <input type="submit" value="완료">
    </form>

    <a href="BoardList.php">취소</a>
</body>
</html>