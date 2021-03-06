<?php

	session_start();

	require_once "include/database.php";

	$mysqli = db_connect();
	$query = "set names utf8";
	$mysqli->query($query);

	   if (!(isset($_SESSION['cart']))){
	       echo ' У вас немає замовлень';
	       exit;
	   };
	   $cart = $_SESSION['cart'];
	   if (count($cart) == 0){
	       echo 'У вас немає замовлень';
	       exit;
	   }
    
    
?>


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
			</div>		</div>
		<div class="maintabs">	
			<a href="index.php"><div class="maintab">Головна</div></a>
			<a href="products.php"><div class="maintab">Товари</div></a>
			<a href="constructor.php#constructor-page"><div class="maintab">Конструктор</div></a>
			<a href="contacts.php"><div class="maintab">Контакти</div></a>
			<a href="aboutus.php"><div class="maintab">Про нас</div></a>
		</div>
	</header>
	<div class="wrapper orderwrapper">
		<h2 class="ordering">Оформлення замовлення</h2>
		<div class="leftinputs">

				<h3>Спосіб доставки</h3>
				<select class="delivery" id="" required autofocus>
					<option value="">----------</option>
					<option value="">Нова пошта</option>
					<option value="">Укрпошта</option>
					<option value="">Самовивіз</option>
				</select>
				<h3>Спосіб оплати</h3>
				<select class="payment" id="" required>
					<option value="">----------</option>
					<option value="">Готівкою</option>
					<option value="">Наложний платіж</option>
					<option value="">Передоплата</option>
				</select>
				<h3>Контактна інформація</h3>
				<input type="text" class="lname" class="lname" placeholder="Прізвище" required> <!-- required -->
				<input type="text" class="fname" placeholder="Ім’я" required> <!-- required -->
				<input type="text" class="surname" placeholder="По-батькові" required> <!-- required -->
				<input type="number" class="phone"  placeholder="Телефон" required> <!-- required -->
				<input type="email"  class="email" placeholder="Email" required> <!-- required -->
				<h3>Адреса</h3>
				<input type="text" class="city" placeholder="Місто" > <!-- required -->
				<div class="addressinput">
					<input type="text" class="street" placeholder="Вулиця" id="street" > <!-- required -->
					<input type="text" class="house" placeholder="Дім" id="house" > <!-- required -->
					<input type="text" class="apartment" placeholder="Квартира" id="apartment" > <!-- required -->
				</div>
				<h3>Коментар</h3>
				<textarea class="comment"></textarea>
				<!-- <button class="orderbtn">Оформити замовлення</button> -->
				<button class="confirnorderbtn" onclick="clearBasket()">Відправити</button>

			
		</div>
		<div class="productsbox">
			<div class="rightblock">	
				<?php
					for ($i = 0; $i < count($cart); $i++){
				       $idProduct = $cart[$i]["idProduct"];
				       $query = 'select * from products where id = '.$cart[$i]["idProduct"].'';
				       $results = $mysqli->query($query);
				       while($row = $results->fetch_assoc()){
				       echo '<div class="productitem">	
								<img src="img/'.$row["photo"].'" alt="'.$row["name"].'">
								<div class="productinfo">	
									<h3>'.$row["name"].'</h3>
									<p>Код: <span>'.$row["code"].'</span></p>
									<p>Ціна: <span>'.$row["price"].'</span>грн.</p>
									<p>Кількість: <span>2</span></p>
									<p>Загальна вартість: <span>'.$row["price"].'</span>грн.</p>
								</div>
							</div>';                               
				       }
				       
				   	}
				?>
				<!-- <div class="productitem">	
					<img src="img/У1.jpg" alt="">
					<div class="productinfo">	
						<h3>Свічка різьблена з намистинами різьблена з намистинами </h3>
						<p>Код: <span>У1</span></p>
						<p>Ціна: <span>250.00</span>грн.</p>
						<p>Кількість: <span>2</span></p>
						<p>Загальна вартість: <span>500.00</span>грн.</p>
					</div>
				</div> -->
			</div>
			<hr>
			<div class="rightbottomblock">	
				<p class="totaltext">Всього:</p>
				<p class="totalprice">1500.00 грн.</p>
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