<html>
	<head>
		<title>
		</title>
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th width="100">번호</th>
					<th width="10">ID</th>
					<th width="100">PW</th>
					<th width="100">Phone</th>
					<th width="100">date</th>
					<th width="100">gender</th>
					<th width="100">email</th>
				</tr>
			</thead>
<?php
	
	# login.php 또는 db.php 
	$db_hostname = '127.0.0.1';   #102.168.126.78 방화벽 
	#$db_hostname = '192.168.31.41';
	$db_database = 'web_test';  //DB 이름 확인
	$db_username = 'kihwan';  # 사용자 아이디
	$db_password = '2021';    # 사용자 패스워드

	//db_server = mysqli_connect('localhost', $db_username, $db_password, $db_database, 3306)  
	$db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database, 3306);  # 맨 뒤에 숫자는 포트 번호  포트번호에 따라서 바꾸기 8.0 버전 이상
	if (!$db_server)
		echo "DB Server connect Error<br>";
	else
		echo "DB Server connect<br>";


	#select ex
	$Select = "SELECT + FROM member ";
	$result = mysqli_query($db_server, $Select);
	while($board = $result->fetch_array())
	{
		$user_num = $board['user_num'];
		$user_id = $board['user_id'];
		$user_pw = $board['user_pw'];
		$user_phone = $board['user_phone'];
		$user_date = $board['user_date'];
		$gender = $board['gender'];
		$email = $board['email'];
		echo <<<END	
		<tbody>
			<tr>
				<td width="100">$user_num</td>
				<td width="100">$user_id</td>
				<td width="100">$user_pw</td>
				<td width="100">$user_phone</td>
				<td width="100">$user_date</td>
				<td width="100">$gender</td>
				<td width="100">$email</td>
			</tr>
		</tbody>	
END;
	}



?>

