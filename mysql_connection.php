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


	// friend 테이블 생성
	// $sql = "create table friend(
	// 	id int not null auto_increment,
	// 	name char(15) not null,
	// 	phone char(30) not null,
	// 	address char(100),
	// 	primary key(id)
	// )";

	// friend 테이블에 레코드 삽입
	// $sql = "insert into friend (name, phone, address) values ('Charlie', '402-111-1111', 'dfefdfd');";
	// $sql .= "insert into friend (name, phone, address) values ('Richard', '402-111-3343', 'fefdf');";

	// friend 레코드 조회
	$sql = "select * from friend;";


	$res = mysqli_query($conn, $sql);

	if($res) {
		while($row = mysqli_fetch_assoc($res)) {
			echo "이름: ".$row['name']."<br>";
			echo "전화번호: ".$row['phone']."<br>";
			echo "주소: ".$row['address']."<br>";
			echo "<hr>";
		}
	} else {
		echo "연결 오류: ".mysqli_error($conn);
	}

	mysqli_close($conn);
?>