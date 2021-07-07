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
	$db_database = 'web_test';
	$db_username = 'kihwan';
	$db_password = '2021';

	//db_server
	$db_server = new mysqll($db_hostname, $db_username, $db_password, $db_database, 3306);  # 맨 뒤에 숫자는 포트 번호
	if (!$db_server)
		echo "DB Server connect Error<br>";
	else
		echo "DB Server connect<br>";




?>

