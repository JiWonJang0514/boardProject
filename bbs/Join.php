<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <form action="join_ok.php" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" id="id"><br>
        <label for="name">이름</label>
        <input type="text" name="name" id="name"><br>
        <label for="addr">주소</label>
        <input type="text" name="addr" id="addr"><br>
        <label for="pw">PW</label>
        <input type="password" name="pw" id="pw"><br>
        <label for="pw_check">PW 확인</label>
        <input type="password" name="pw_check" id="pw_check">
        <button type="button" onclick="checkPassword()">확인</button><br>

        <input type="submit" value="가입">
        <button type="button"><a href="index.php">취소</a></button>
    </form>

    <script>
        function checkPassword() {
            let pwCheck = document.querySelector("#pw_check").value;
            let pw = document.querySelector("#pw").value;

            if (pw == pwCheck) {
                alert("비밀번호가 확인되었습니다 :)");
            } else {
                alert("비밀번호를 다시 확인해주세요.");
            }
        }

    </script>
</body>
</html>