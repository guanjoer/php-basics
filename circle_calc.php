<p>
<?php
// area of a circle = r*r*pi
$radius = 20;

$area = 20*20*3.14;
echo "<h1>Calculation of a Cicle</h1>";
echo "원의 반지름".$radius."<br>";
echo "원의 넓이: ".$area;
?>
</p>

<hr>

<p>
	<?php
		// Use Function for calculation of circle area
		function circle_area($r) {
			$area = $r * $r * pi();

			return $area;
		}

		$radius = 7;
		$res = circle_area($radius);
		$res_int = round($res);

		echo "반지름이 <strong>".$radius."</strong> 일 때, 원의 넓이: <strong>".$res_int."</strong>";
	?>
</p>