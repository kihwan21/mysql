<html>
    <head>
        <meta charset="utf-8"></meta>
        <title>회원 가입 페이지</title>
    </head>
    <body>
        <!--form tag -->
        <form action = "/content/join_query.php" method = "post">  
            아이디<br><input type="text" name="id"></input><br>
            비밀번호<br><input type="text" name="pw"></input><br>
            비밀번호 재확인<br><input type="text" name="r_pw"></input><br>
            이름<br><input type="text" name="name"></input><br>
            생년월일<br><input type="text" name="bt"></input><br>
            성별<br><input type="text" name="ge"></input><br>
            이메일<br><input type="text" name="e_mail"></input><br>
            <input type="submit" value="확인"></input>

        </form>
    </body>
</html>