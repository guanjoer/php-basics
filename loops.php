<p>
<?php
// 1 ~ 100까지 5의 배수의 합 // Use while loop
$x = 1;
$sum = 0;

while($x <= 100) {
	if($x % 5 == 0) {
		$sum += $x;
	}
	$x++;
}

echo "1~100 까지 5의 배수의 합: ".$sum;

echo "<br>";
echo "------------------------<br>";

// &nbsp;와 ""의 공백 차이
$test = "test";
echo $test."	".$test."<br>";
echo $test." &nbsp;         ".$test;
?>
</p>

<p>
	<?php
		// 1 ~ 100까지의 정수 합
		$sum = 0;
		for($i=1; $i<=100; $i++) {
			$sum += $i;
		}
		echo "1에서 100까지의 정수 합: ".$sum;
	?>
</p>

<p>
	<?php
		// 1 ~ 100까지 3의 배수 합계 // Use for loop
		$sum = 0;

		for($i=1; $i<=100; $i++) {
			if($i % 3 == 0) {
				$sum += $i;
			}
		}
		echo "1 ~ 100까지 3의 배수 합계: ".$sum;
	?>
</p>