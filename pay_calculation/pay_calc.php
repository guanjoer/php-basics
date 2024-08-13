<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pay Calculator</title>
	<style>
		body {
			margin: 20px;
		}
		h1 {
			text-align: center;
		}
		table {
			border-collapse: separate;
			border-spacing: 10px; /* 행과 열 사이에 10px의 여백 추가 */
			width: 80%; /* 테이블 전체 너비 */
			margin: 0 auto;
		}
		tr, td{
			border: 1px solid black;
			text-align: center; /* 텍스트를 중앙 정렬 */
		}

		input[type="text"] {
			width: 100%; /* 입력 필드의 너비를 셀의 너비에 맞게 설정 */
			padding: 8px; /* 입력 필드 안의 여백 */
			box-sizing: border-box; /* 패딩을 포함한 전체 너비 계산 */
		}

		button {
			margin-top: 20px;
			padding: 0.35rem 1.25rem;
			font-size: 16px;
			margin: 0 0 0 48%;
			font-weight: bold;
			background-color: rgb(153, 230, 255);
			border-color: rgb(153, 230, 255);
			border-style: none;
			border-radius: 8px
		}

		button:hover {
			background-color: rgb(204, 242, 255);
			border-color: rgb(204, 242, 255);
			cursor: pointer;
		}
	</style>
</head>
<body>
	<h1>Payment Caclulator</h1>
	<form action="pay_calc_res.php" method="POST">
		<table>
			<tr>
				<th>물품 당 가격(원)</th>
				<th>물품 개수(개)</th>
				<th>할인률(%)</th>
				<th>배송비(원)</th>
			</tr>
			<tr>
				<td>
					<input type="text" name="price" required>
				</td>
				<td>
					<input type="text" name="num" required>
				</td>
				<td>
					<input type="text" name="disc" required>
				</td>
				<td>
					<input type="text" name="delivery" required>
				</td>
			</tr>

		</table>
		<button>계산</button>
	</form>

</body>
</html>
