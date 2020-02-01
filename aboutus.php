<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Candle Studio</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
	<header>
		<div class="maintabs">	
			<div class="topline"></div>
		</div>
		<div class="contentheader">
			<div class="left">
				<h1>Candle Studio</h1>
				<hr>
				<h2>Виготовлення художніх різьблених свічок на подарунок чи під замовлення на будь-який смак</h2>
			</div>
			<div class="right">
				<a href="index.php">
					<img class="logo" src="img/logo/logo4.jpg" width="250" alt="">
				</a>
				<a href="basket.php">
					<i class="fa fa-shopping-basket basketimg"></i>
				</a>
			</div>
		</div>
		<div class="maintabs">	
			<a href="index.php"><div class="maintab">Головна</div></a>
			<a href="products.php"><div class="maintab">Товари</div></a>
			<a href="constructor.php#constructor-page"><div class="maintab">Конструктор</div></a>
			<a href="contacts.php"><div class="maintab">Контакти</div></a>
			<a href="aboutus.php"><div class="maintab active">Про нас</div></a>
		</div>
	</header>
	<div class="wrapper">
			<h2>Про нас</h2>
			<div class="mainbox aboutustext">
				<p>
					Різьблені свічки ручної роботи, які можуть стати оригінальним подарунком на Новий рік, Різдво, День Святого Валентина, День народження, Весілля, Хрестини, День вчителя.
				</p>
				<p>Свічка виготовляється з високоякісного харчового парафіну П-2, який не шкідливий для здоров'я.</p>
				<p>Доставка можлива по всій Україні. Термін виготовлення: 2-3 дні.</p>	
				<p>
					Індивідуальний підхід до кожного замовлення.<br>
					Здивуйте своїх рідних оригінальним подарунком!<br>
					Зроблено з любов'ю!!!
				</p>
			</div>
			<div class="mainbox aboutusvideo">
				<iframe width="100%" height="100%" src="https://www.youtube.com/embed/GT29OYPBzBU" frameborder="0" allowfullscreen></iframe>	
			</div>

	</div>
	<?php include "include/footer.php";?>

	
	<!-- JQuery -->
	<script src="include/jquery-3.3.1.js"></script>
	<script src="include/html2canvas.min.js"></script>
	<script src="include/canvas2image.js"></script>
	<script
		src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
		integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
		crossorigin="anonymous">	
  	</script>
	<script src="scripts.js"></script>
</body>
</html>