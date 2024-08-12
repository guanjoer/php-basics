<h1>Logout</h1>

<?php
setcookie('userid', '', time() -3600); // 1시간 차감

echo "<script>
	location.href='login_status.php'
	</script>";
?>