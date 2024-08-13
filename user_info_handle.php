<?php
	$dbHost = getenv('DB_HOST');
	$dbName = getenv('DB_NAME'); 
	$dbUser = getenv('DB_USER');
	$dbPass = getenv('DB_PASS');

	// MySQL 연결 // host, user, passwd, db_name 순서
	$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

	// 연결 확인
	if(!$conn) {
		die("연결 오류: ".mysqli_connect_error());
	}

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$addr = $_POST['address'];
	// friend 테이블에 레코드 삽입
	$sql = "insert into friend (name, phone, address) values ($name, $phone, $addr);";

	// friend 레코드 조회
	// $sql = "select * from friend;";


	$res = mysqli_query($conn, $sql);

	if($res) {
		echo "레코드 삽입 완료.";
	} else {
		echo "연결 오류: ".mysqli_error($conn);
	}

	mysqli_close($conn);
?>