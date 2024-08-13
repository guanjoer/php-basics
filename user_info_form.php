<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>

	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>유저 정보 입력 폼</h1>
	<form action="user_info_handle.php" method="POST">
		<label for="name">이름</label>
		<input type="text" name="name" id="name"><br>
		<label for="phone">전화번호</label>
		<input type="text" name="phone" id="phone"><br>
		<label for="addr">주소</label>
		<input type="text" name="address" id="addr"><br>
		<button>전송</button>
	</form>
</body>
</html>