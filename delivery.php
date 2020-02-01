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
			<a href="aboutus.php"><div class="maintab">Про нас</div></a>
		</div>
	</header>
	<div class="wrapper">
		
		<div class="mainbox">
			<h2 class="">Графік роботи</h2>
		</div>
		<div class="mainbox workschedule">
			<p class="workscheduletext">Закази приймаються з 9:00 до 18:00 всі дні окрім державних вихідних та релігійних свят.</p>
		</div>
		
		<div class="mainbox">
			<table>
				<tr>
					<th>Понеділок</th>
					<th>Вівторок</th>
					<th>Середа</th>
					<th>Четвер</th>
					<th>П’ятниця</th>
					<th>Субота</th>
					<th>Неділя</th>
				</tr>
				<tr>
					<td>9:00-18:00</td>
					<td>9:00-18:00</td>
					<td>9:00-18:00</td>
					<td>9:00-18:00</td>
					<td>9:00-18:00</td>
					<td>-</td>
					<td>-</td>
				</tr>
			</table>
		</div><a name="delivery-page"></a>
		<div class="mainbox">
			<h2 class="delivery">Оплата</h2>
		</div>

		<div class="mainbox deliverytext">
			<p><b>Накладений платіж. </b>100% передоплата на карту Приватбанку. У цьому випадку ви не оплачуєте комісію за накладений платіж. Ви можете перерахувати кошти з карти іншого банку, але в такому випадку можливе зняття додаткових коштів від банку у вигляді комісії.</p>
			<br>
			<p><b>Післяплата. </b>Ви можете оплатити замовлення при отриманні на пошті (накладений платіж). Ця послуга коштує дорожче звичайного відправлення, тому що Ви додатково сплачуєте комісію за повернення грошових коштів відправнику (20 грн. + 2% від суми замовлення). Посилки Укрпоштою відправляємо лише по передоплаті.</p>
			<div class="bottomflex">
				<img src="MyIcons/mastercard.png" width="70" alt="">
				<img src="MyIcons/privatbank.png" width="100" alt="">
				<img src="MyIcons/oshhadbank.png" width="100" alt="">
			</div>
		</div>

		<div class="mainbox">
			<div>
				<h2 class="delivery">Доставка</h2>	
			</div>
			
			<!-- <img src="MyIcons/ico.ico" width="30" alt=""> -->

			
		</div>

		<div class="mainbox deliverytext">
			<p><b>Доставка по Україні. </b>Доставка по Україні здійснюється Новою поштою (1-3 дні) та Укрпоштою (4-10 днів). У разі відправлення замовлення Новою поштою, послуги пошти покупець сплачує при отриманні замовлення, вартість такого відправлення залежить від ваги посилки та міста куди необхідно доставити посилку. У разі доставки Укрпоштою, вартість доставки оплачується разом з оплатою замовлення.
			</p>
			<div class="bottomflex">
				<img src="MyIcons/ukrposhta.png" width="100" alt="">
				<img src="MyIcons/nova-poshta.png" width="80" alt="">
			</div>
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