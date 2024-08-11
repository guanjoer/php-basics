<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pay Calculator</title>
	<style>
		h1 {
			text-align: center;
		}
		table {
			border-collapse: separate;
			border-spacing: 10px; /* 행과 열 사이에 10px의 여백 추가 */
			width: 80%; /* 테이블 전체 너비 */
			margin: 0 auto;
		}



		p a {
			text-decoration: none;
			padding: 0.35rem 1.25rem;
			background-color: rgb(153, 230, 255);
			border-color: rgb(153, 230, 255);
			color: black;
			font-weight: bold;
			border-radius: 8px;
			margin: 0 0 0 48%;
		}

		p a:hover {
			background-color: rgb(204, 242, 255);
			border-color: rgb(204, 242, 255);
			cursor: pointer;
		}

		#total-price {
			font-weight: bold;
			font-size: 2rem;
			text-align: center;
		}

		td {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Payment Caculation Results</h1>
	<p>
		<?php
			// 결제 금액 = (상품 금액*수량) - ((상품 금액*수량) * 할인률 / 100) + 배송비
			// x = (10000원)*3개 - ((10000원)*3개 * 10%/100) + 3000

			$price_per_product = $_POST['price'];
			$product_num = $_POST['num'];
			$total_product_price = $price_per_product * $product_num;
			$discount_percentage = $_POST['disc'];
			$delivery_charge = $_POST['delivery'];

			$total_pay = $total_product_price - ($total_product_price * $discount_percentage/100) + $delivery_charge;
		?>
			<table>
				<tr>
					<th>물품 당 가격(원)</th>
					<th>물품 개수(개)</th>
					<th>할인률(%)</th>
					<th>배송비(원)</th>
				</tr>
				<tr>
					<td>
						<?=$price_per_product." 원"?>
					</td>
					<td>
						<?=$product_num." 개"?>
					</td>
					<td>
						<?=$discount_percentage." %"?>
					</td>
					<td>
						<?=$delivery_charge." 원"?>
					</td>
				</tr>

			</table>
		</p>

		<p>
			<a href="pay_calc.php">초기화</a>
		</p>

		<p id="total-price">
			<?php
				echo "총 결제 금액: ".$total_pay." 원";
			?>
		</p>


</body>
</html>

