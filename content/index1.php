<html>    <!--html 부분 !-->
	<head>
		<title>
		</title>
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th width="10">ID</th>
					<th width="100">PW</th>
					<th width="100">date</th>
					<th width="100">email</th>
				</tr>
			</thead>
<?php     #php 부분     $ 가 변수 명으로 선언 됨. 

    # login.php 또는 db.php  로그인 할 때 
    $db_hostname = '127.0.0.1';   #102.168.126.78 방화벽 
    #$db_hostname = '192.168.31.41';
    $db_database = 'new_test';  //DB 이름 확인  들어갈 로컬 데이터 베이스에 따라서 바꾸기
    $db_username = 'kihwan';  # 사용자 아이디
    $db_password = '2021';    # 사용자 패스워드

    //db_server = mysqli_connect('localhost', $db_username, $db_password, $db_database, 3306)  
    $db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database, 3306);  # 맨 뒤에 숫자는 포트 번호  포트번호에 따라서 바꾸기 8.0 버전 이상  mysqli는 쿼리문을 서버에 전송하는 코드
    if (!$db_server)
        echo "DB Server connect Error<br>";
    else
        echo "DB Server connect<br>";


    #select 문 
    $Select = "SELECT * FROM new_test ";   # 맨 뒤 빨강색이 테이블 명. 
    $result = mysqli_query($db_server, $Select); 
    while($board = $result->fetch_array())
	{
		$user_id = $board['user_id'];
		$user_pw = $board['user_pw'];
		$email = $board['email'];
        $user_date = $board['user_date'];
		echo <<<END
        <tbody>
			<tr>
				<td width="100">$user_id</td>
				<td width="100">$user_pw</td>
				<td width="100">$user_date</td>
				<td width="100">$email</td>
			</tr>
		</tbody>
END;
    } 

    #insert 문
    $Insert = "INSERT INTO new_test (
        user_id, user_pw, email, user_date) VALUES ('Hello', 'qwerty', 'kihwan@gmail.com', '2021-02-02')";

    $result = mysqli_query($db_server, $Insert);
    if($result == FALSE){
        echo mysqli_error($db_server);
    }

#php부분 끝  
?>   
        </table>
	</body>
<html>