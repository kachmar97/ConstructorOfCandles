<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Candle Studio</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	
</head>
<body onLoad="showMyCart()">
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
			</div>		</div>
		<div class="maintabs">	
			<a href="index.php"><div class="maintab">Головна</div></a>
			<a href="products.php"><div class="maintab">Товари</div></a>
			<a href="constructor.php#constructor-page"><div class="maintab">Конструктор</div></a>
			<a href="contacts.php"><div class="maintab">Контакти</div></a>
			<a href="aboutus.php"><div class="maintab">Про нас</div></a>
		</div>
	</header>
	<div class="wrapper">
		<div id="basketwrapper">
			<!-- <h2>Корзина</h2> -->
			
		</div>
		<hr class="basket_line">
		<div class="bottomtotal">
			<a href="products.php"><button class="basket_continue_shopping">Продовжити покупки</button></a>
			<div class="totalbox">
				<div class="totalpricebox">
					<div class="totaltext">Всього: </div>
					<div class="totalprice"><span></span> грн.</div>	
				</div>
				<button class="basket_buybtn">Оформити замовлення</button>
			</div>	
			
		</div>
		
		
	</div>
	<?php require_once 'include/footer.php';?>
	<script src="include/jquery-3.3.1.js"></script>
	<script
		src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
		integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
		crossorigin="anonymous">	
  	</script>
	<script src="scripts.js"></script>
	<!-- <script>alert(55555551);</script> -->
<!-- <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script> -->
</body>
</html>