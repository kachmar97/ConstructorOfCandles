<?php
require_once "include/database.php";

$dbc = db_connect();

$queryAllProducts = "SELECT * FROM `products` WHERE id BETWEEN 43 AND 300 ORDER BY id DESC";
$AllProducts = mysqli_query($dbc, $queryAllProducts);
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
			</div>
		</div>
		<div class="maintabs">	
			<a href="index.php"><div class="maintab">Головна</div></a>
			<a href="products.php"><div class="maintab active">Товари</div></a>
			<a href="constructor.php#constructor-page"><div class="maintab">Конструктор</div></a>
			<a href="contacts.php"><div class="maintab">Контакти</div></a>
			<a href="aboutus.php"><div class="maintab">Про нас</div></a>
		</div>
	</header>
	<div class="wrapper">
		<h2 class="productsHeading">Торвари</h2>
		<?php
			$i=1;
				while ($prod = mysqli_fetch_assoc($AllProducts)) {
			?>

				<div class="container">
				        <img src="img/<?php echo $prod["photo"];?>" alt="Avatar" class="image">
				        <div class="middle">
				        <div class="text"><?php echo $prod["name"];?></div>
				        <div class="price">	
							<?php echo $prod["price"];?>грн.
				        </div>
			        	<button class="buybtn" onClick="addToCart(<?php echo $prod["id"];?>,'<?php echo $prod["code"];?>','<?php echo $prod["photo"];?>','<?php echo $prod["name"];?>',<?php echo $prod["price"];?>)">Купити</button>
				        </div>      
			    </div>
				<!-- <img class="imgcolor" src="img/<?php echo $prod["photo"];?>" width="200" height="300" title="<?php echo $prod["name"];?>" alt="<?php echo $prod["name"];?>"> -->
				
				<!-- <img src="img/<?php echo $art["image"];?>" alt="" width="50%">	 -->
			<?php
			$i++;
			}
		?>
	</div>
</div>

	<footer>
		<div class="topline">
		</div>
		<div class="footerbottomline ">
			<div class="footerbottomborder">
				<div class="f_block">Товари</div>
				<div class="f_block">Доставка і оплата</div>
				<div class="f_block">Контакти</div>
				<div class="f_block">Графік роботи</div>
			</div>
		</div>
	</footer>
	<script src="include/jquery-3.3.1.js"></script>
	<script src="scripts.js"></script>
</body>
</html>