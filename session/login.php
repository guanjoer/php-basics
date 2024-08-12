<h1>Login</h1>

<?php
session_start();

$_SESSION['userid'] = 'Richard';

echo "<script>
	location.href='login_status.php'
	</script>";
?>