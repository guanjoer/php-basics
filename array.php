<p>
<?php
$arr = array(77, 78, 99 ,100, 79);

$leng = count($arr);

echo $leng;
?>

</p>
<hr>
<p>
	<?php
		$phone_num = "010-1234-5678";

		$arr = explode("-", $phone_num);

		for($i=0; $i<count($arr); $i++) {
			echo $arr[$i]."<br>";
		}

	?>
</p>
<hr>
<p>
<?php
	$date = date("Y년 m월 d일 H시i분s초");

	echo $date;

	echo "<hr>";

	$time_stamp = time();
	echo $time_stamp."<br>";

	$time_convert = date("Y년 m월 d일 H시i분s초", $time_stamp);
	echo $time_convert;
?>
</p>