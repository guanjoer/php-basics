<style>
	table {
		border-collapse: collapse;
	}

	tr, th, td {
		padding: 12px;
		/* text-align: center; */
	}

	table, tr, td {
		border: 1px solid black;
	}

	th {
		background-color: #5F9EA0;
	}
</style>
<?php
	$string = "";
	$string .= "<table>";

	// 첫 번째 행: 각 단의 헤더
	$string .= "<tr>";
	for($i=2; $i<=9; $i++) {
		$string .= "<th>".$i." 단</th>";
	}
	$string .= "</tr>";

	// 곱셈 결과를 행으로 나열
	for($j=1; $j<=9; $j++) {
		$string .= "<tr>";
		for($i=2; $i<=9; $i++) {
			$res = $i * $j;
			$rep = $i." X ".$j." = ".$res;
			$string .= "<td>".$rep."</td>";
		}
		$string .= "</tr>";
	}

	$string .= "</table>";

	echo $string;
?>
