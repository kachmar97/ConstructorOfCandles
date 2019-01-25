<?php
// $dbc = mysqli_connect('localhost', 'root', '123456', 'candlestudio') or DIE ('Не вдалося з’эднатися з БД');
require_once "database.php";

$dbc = db_connect();

$query = "SELECT * FROM `typescandles`";
$data = mysqli_query($dbc, $query);

// for ($i=1; $i <= 214; $i++) { 
// 	$query2 = "UPDATE `products` SET `label` = 'black' WHERE `code` IN('У9', 'У11', 'У28', 'У32', 'У68', 'У69', 'У83', 'У103', 'У104', 'У114', 'У177')";	
// 	mysqli_query($dbc, $query2);
// }

$queryRed = "SELECT * FROM `products` WHERE `label` = 'red'";
$redCandles = mysqli_query($dbc, $queryRed);


if (isset($_POST["redbtn"])) {
	$queryred = "SELECT * FROM `products` WHERE `label` = 'red'";
	$redCandles = mysqli_query($dbc, $queryred);
	$showCandles = $redCandles;
}elseif(isset($_POST["greenbtn"])){
	$queryGreen = "SELECT * FROM `products` WHERE `label` = 'green'";
	$greenCandles = mysqli_query($dbc, $queryGreen);
	$showCandles = $greenCandles;
}elseif (isset($_POST["bluebtn"])) {
	$queryBlue = "SELECT * FROM `products` WHERE `label` = 'blue'";
	$blueCandles = mysqli_query($dbc, $queryBlue);
	$showCandles = $blueCandles;
}elseif (isset($_POST["yellowbtn"])) {
	$queryyellow = "SELECT * FROM `products` WHERE `label` = 'yellow'";
	$yellowCandles = mysqli_query($dbc, $queryyellow);
	$showCandles = $yellowCandles;
}elseif (isset($_POST["pinkbtn"])) {
	$querypink = "SELECT * FROM `products` WHERE `label` = 'pink'";
	$pinkCandles = mysqli_query($dbc, $querypink);
	$showCandles = $pinkCandles;
}elseif (isset($_POST["orangebtn"])) {
	$queryorange = "SELECT * FROM `products` WHERE `label` = 'orange'";
	$orangeCandles = mysqli_query($dbc, $queryorange);
	$showCandles = $orangeCandles;
}elseif (isset($_POST["blackbtn"])) {
	$queryblack = "SELECT * FROM `products` WHERE `label` = 'black'";
	$blackCandles = mysqli_query($dbc, $queryblack);
	$showCandles = $blackCandles;
}elseif (isset($_POST["lingueebtn"])) {
	$querylinguee = "SELECT * FROM `products` WHERE `label` = 'linguee'";
	$lingueeCandles = mysqli_query($dbc, $querylinguee);
	$showCandles = $lingueeCandles;
}
else{
	$showCandles = $redCandles;
}

// $showCandles = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<div class="header">
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
				<img class="pic" src="https://via.placeholder.com/252x102?text=Logo+Candle-studio" alt="">
				
			</div>
		</div>
		<div class="maintabs">	
			<div class="maintab">Головна</div>
			<div class="maintab">Товари</div>
			<div class="maintab active">Конструктор</div>
			<div class="maintab">Контакти</div>
			<div class="maintab">Про нас</div>
		</div>
	</div>
	<!-- Tab links -->
	<div class="content">
		<div class="tab">
		  <button class="tablinks tab1" onclick="openCity(event, 'Form')">Форма</button>
		  <button class="tablinks tab2" onclick="openCity(event, 'Design')" id="defaultOpen" >Дизайн</button>
		  <!-- <button class="tablinks tab3" onclick="openCity(event, 'Design')">Узор</button> -->
		  <button class="tablinks tab4" onclick="openCity(event, 'Decoration')">Декорація</button>
		</div>
	</div>
	
	<!-- Tab content -->
	<div id="Form" class="tabcontent">
		<div class="workspace ">
			<div class="lefttools">
				<h3>Виберіть форму свічки</h3>
				<div class="forms">
					<?php
					$i=1;
						while ($art = mysqli_fetch_assoc($data)) {
					?>
						<input 
							type="radio" 
							class="radiobtn" 
							id="r<?php echo $i?>"
							name="candletype" 
							value="img/<?php echo $art["image"];?>" 
							<?php if($art["name"] == 'Піраміда'){echo "checked";}?>
						><label for="r<?php echo $i?>"><?php echo $art["name"];?></label>
						<br>
						<!-- <img src="img/<?php echo $art["image"];?>" alt="" width="50%">	 -->
					<?php
					$i++;
					}
					?>	
				</div>
				<img src="" alt="">
				<p class="candlesize">Розмір свічки: <span>16</span></p>
				<input class="slider" type="range" min="1" max="11" id="size" oninput="sizePic()" value="6">
				<button class="nextbtn tablinks" onclick="openCity(event, 'Color')">Далі</button>
			</div>
			<div class="modelcandle">
				<div class="candle">
					<img id="pic" src="img/П1.png" alt="" width="420">
				</div>
			</div>
		</div>
	</div>
	
	
	<div id="Design" class="tabcontent">
	  <div class="workspace">
			<div class="lefttools hidetools">
				<h3>Виберіть колір свічки</h3>
				<form action="index.php" method="POST">
				<div class="colorbox">
						<button class="i green" name="greenbtn"></button>
						<button class="i red" name="redbtn"></button>
						<button class="i orange" name="orangebtn"></button>
						<button class="i yellow" name="yellowbtn"></button>
						<button class="i pink" name="pinkbtn"></button>
						<button class="i linguee" name="lingueebtn"></button>
						<button class="i blue" name="bluebtn"></button>
						<button class="i black" name="blackbtn"></button>		
					
				</div>
				</form>
				<div class="bigbox">
					<?php
						$i=1;
							while ($art1 = mysqli_fetch_assoc($showCandles)) {
						?>
							<img class="imgcolor" src="img/<?php echo $art1["photo"];?>" width="200" height="300" title="<?php echo $art1["name"];?>" alt="<?php echo $art1["name"];?>">
							
							<!-- <img src="img/<?php echo $art["image"];?>" alt="" width="50%">	 -->
						<?php
						$i++;
						}
						?>
				</div>
				<button class="nextbtn tablinks" onclick="openCity(event, 'Color')">Далі</button>
			</div>
			<div class="modelcandle">
				<div class="candle">
					<img id="pic2" src="img/У1.jpg" alt="" width="420">
				</div>
			</div>
		</div> 
	</div>

	<div id="Decoration" class="tabcontent">
	  <h3>Декорація</h3>
	  <p>Tokyo is the capital of Japan.</p>
	</div>

	
	<!-- JQuery -->
	<script 
		src="https://code.jquery.com/jquery-3.3.1.js"
	  	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	  	crossorigin="anonymous">
	</script>
	<script>
		// Some jquery for check working
		// $('.tab').click(function(){
		// 	alert(123);
		// })
	</script>
	<script>
		
	</script>
	<script src="scripts.js"></script>
</body>
</html>