<?php
    $r_id = $_POST['id'];
    $r_pw = $_POST['pw'];
    $r_r_pw = $_POST['r_pw'];
    $r_name = $_POST['name'];
    $r_bt = $_POST['bt'];
    $r_ge = $_POST['ge'];
    $r_email = $_POST['e_mail'];
    echo"받아온 데이터<br>.";
    echo $r_id, "<br>";
    echo $r_pw, "<br>";
    echo $r_r_pw, "<br>";
    echo $r_name, "<br>";
    echo $r_bt, "<br>";
    echo $r_bt, "<br>";
    echo $r_ge, "<br>";
    echo $r_email, "<br>";

    $db_hostname = '127.0.0.1';   #102.168.126.78 방화벽 
	#$db_hostname = '192.168.31.41';
	$db_database = 'new_test';  //DB 이름 확인
	$db_username = 'kihwan';  # 사용자 아이디
	$db_password = '2021';    # 사용자 패스워드

    $db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database, 3306);  # 맨 뒤에 숫자는 포트 번호  포트번호에 따라서 바꾸기 8.0 버전 이상
	if (!$db_server)
		echo "DB Server connect Error<br>";

    $Insert = "INSERT INTO test (user_id, user_pw, user_phone, user_date, gender, email) VALUES (
			'$r_id', '$r_pw', '$r_name','$r_bt','$r_ge','$r_email')";     
	
	$result = mysqli_query($db_server, $Insert);
	if($result == FALSE){
		echo mysqli_error($db_server);
	}
?>