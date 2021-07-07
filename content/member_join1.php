<html> <!--- 사용자가 정보를 입력 할 때 보이는 곳 --->
    <head>
        <meta charset="utf-8"></meta>      <!--- 한글 깨지지 말라고 해둠 --->
        <title>회원 가입 페이지</title>
    </head>
    <body>
        <!--form tag (형식 지정) -->
        <form action = "/content/join_query1.php" method = "post">  
            아이디<br><input type="text" name="id"></input><br>
            비밀번호<br><input type="text" name="pw"></input><br>
            생년월일<br><input type="text" name="bt"></input><br>
            이메일<br><input type="text" name="e_mail"></input><br>
            <input type="submit" value="확인"></input>
        </form>
    </body>
</html>