<h1>Logout</h1>

<?php
session_start();

if(isset($_SESSION['userid'])) {
	unset($_SESSION['userid']);
}

echo "<script>
	location.href='login_status.php'
	</script>";
?>