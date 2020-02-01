<?php
	require_once "include/database.php";

	$dbc = db_connect();

	function dump($var, $die = false, $all = false){
		?>
			<font style="text-align: left; ">
				<pre><?php print_r($var);?></pre>
			</font>
		<?php
	}


	$idarray = explode("_", $_POST['id']);
	$codeArray = explode("_", $_POST['code']);
	$picArray = explode("_", $_POST['pic']);
	$nameArray = explode("_", $_POST['name']);
	$countArray = explode("_", $_POST['count']);
	$startPriceArray = explode("_", $_POST['startPrice']);
	$priceArray = explode("_", $_POST['price']);
    
    foreach($priceArray as $k=>$v){

        unset($priceArray[$k]);
        $priceArray[$idarray[$k]] = [
        	'code'=>$codeArray[$k],
        	'pic'=>$picArray[$k], 
        	'name'=>$nameArray[$k], 
        	'count'=>$countArray[$k], 
        	'startPrice'=>$startPriceArray[$k], 
        	'price'=>$v 
        ];

 //    $query = "INSERT INTO `order_item` (`id_product`, `code`, `photo`, `name`, `count`, `price`, `total_price`) VALUES ('".$idarray[$k]."', '".$codeArray[$k]."', '".$picArray[$k]."', '".$nameArray[$k]."', ".$countArray[$k].", ".$startPriceArray[$k].", ".$v.")";
	// $dodaty = mysqli_query($dbc, $query);
	

    }
    $delLastElement = array_pop($priceArray);
	// dump($priceArray);

	// echo "<br>";
	// echo "=================================";

    
    
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
				<button class="confirnorderbtn" onclick="clearBasket()">Оформити замовлення</button>

			
		</div>
		<div class="productsbox">
			<div class="rightblock">	
				<?php foreach ($priceArray as $key => $value) {?>
						<div class="productitem" idnumber="<?php echo $key;?>">	
							<img src="<?php echo $value['pic'];?>" alt="">
							<div class="productinfo">	
								<h3><?php echo $value['name'];?></h3>
								<p>Код: <span class="codespan"><?php echo $value['code'];?></span></p>
								<p>Ціна: <span class="startpricespan"><?php echo $value['startPrice'];?></span>грн.</p>
								<p>Кількість: <span class="countspan"><?php echo $value['count'];?></span></p>
								<p>Загальна вартість: <span class="pricespan"><?php echo $value['price'];?></span>грн.</p>
							</div>
						</div>
				<?php
					}
				?>
			</div>
			<hr>
			<div class="rightbottomblock">	
				<p class="totaltext">Всього:</p>
				<p class="totalprice"><?php echo $_POST['totalprice']?> грн.</p>
				<!-- <button class="IwillKilYou">Давай</button> -->
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
</body>
</html>


<!-- Пишем цикл, повторюєм скільки разів знаходить item в кожній ітерації додаємо до строки знайдену діч-->
<!-- Можна буде отримувати ip користувача щоби задавати його значенням order великого(загального, цілого замовлення) -->