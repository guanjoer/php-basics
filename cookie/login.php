<h1>Login</h1>

<?php
setcookie('userid', 'Richard', time() + (60*60*24*30)); // 30 days

echo "<script>
	location.href='login_status.php'
	</script>";
?>