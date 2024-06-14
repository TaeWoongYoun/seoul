<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인페이지</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">

        </div>
        <nav></nav>
        <div class="btnBox">
            <button>로그인</button>
            <button>회원가입</button>
        </div>
    </header>

    <form action="join.php" method="post">
        <p><input type="text" name="name" id="name" placeholder="이름"></p>
        <p><input type="text" name="id" id="id" placeholder="아이디"></p>
        <p><input type="password" name="password" id="password" placeholder="비밀번호"></p>
        <p><input type="password-ck" name="password-ck" id="password-ck" placeholder="비밀번호 확인"></p>
    </form>

    <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="index.js"></script>
</body>
</html>