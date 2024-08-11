<h1>Print the odd integers in the range from 100 to 200</h1>
<p>
<h2>Use While Loop</h2>
<?php
	// 100 ~ 200까지의 정수 중 홀수 만 출력
	$i = 100;
	while($i <=200) {
		if($i % 2 == 1) {
			echo $i." &nbsp; ";
		}

		$i++;
	}
?>
</p>
<hr>
<p>
	<h2>Use For Loop</h2>
	<?php
		for($i=100; $i<=200; $i++) {
			if($i % 2 == 1) {
				echo $i." &nbsp; ";
			}
		}
	?>
</p>