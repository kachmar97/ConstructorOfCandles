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
			<a href="contacts.php"><div class="maintab active">Контакти</div></a>
			<a href="aboutus.php"><div class="maintab">Про нас</div></a>
		</div>
	</header>
	
	<div class="wrapper">
		<h2>Контакти</h2>
		<div class="contactblock">
					<img src="img/Contacts/user1_200x200.jpg" alt="">
					<div class="contactName">
						<h4>Марія Герасимлюк</h4>
						<h5>Голова компанії, майстер по свічкарству</h5>	
					</div>
					<div class="contactInfo">
						<div>
							<b>Facebook:</b> 
							<br>
							<a href="https://www.facebook.com/candle.studio1">candle.studio1</a>
						</div>
						<div>
							<b>Instagram:</b>
							<br>
							<a href="https://www.instagram.com/candle_studio_/">candle_studio_</a>
						</div>
						<div>
							<b>Телефон:</b>
							<br>
							<a>096 144 37 50</a>
						</div>
					</div>
				</div>
				<div class="contactblock">
					<img src="img/Contacts/user2_200x200.jpg" alt="">
					<div class="contactName">
						<h4>Іван Герасимлюк</h4>
						<h5>Майстер по свічкарству</h5>	
					</div>
					<div class="contactInfo">
						<div>
							<b>Facebook:</b> 
							<br>
							<a href="https://www.facebook.com/ifivafans">ifivafans</a>
						</div>
						<div>
							<b>Instagram:</b>
							<br>
							<a href="https://www.instagram.com/ivangerasimliuk/">ivangerasimliuk</a>
						</div>
						<div>
							<b>Телефон:</b>
							<br>
							<a>098 727 89 20 </a>
						</div>
					</div>
				</div>
				<div class="contactblock">
					<img src="img/Contacts/user3_200x200.jpg" alt="">
					<div class="contactName">
						<h4>Ярослава Герасимлюк</h4>
						<h5>Майстер по свічкарству</h5>	
					</div>
					<div class="contactInfo">
						<div>
							<b>Facebook:</b> 
							<br>
							<a href="https://www.facebook.com/candle.studio1">candle.studio1</a>
						</div>
						<div>
							<b>Instagram:</b>
							<br>
							<a href="https://www.instagram.com/candle_studio_/">candle_studio_</a>
						</div>
						<div>
							<b>Телефон:</b>
							<br>
							<a>096 356 22 15</a>
						</div>
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