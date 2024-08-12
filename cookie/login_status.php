<h1>Login Status</h1>
<?php
	if(!isset($_COOKIE['userid'])) {
		echo "아래 링크를 클릭하여 로그인을 진행해주세요!<br>";
		echo "<a href='login.php'>Login with cookie</a>";
	} else {
		echo $_COOKIE['userid']." 님 안녕하세요.<br>";
		echo "로그아웃을 원하시면 아래 링크를 클릭해주세요!<br>";
		echo "<a href='logout.php'>Logout</a>";
	}
?>