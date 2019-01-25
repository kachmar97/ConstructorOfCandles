<?php
// $dbc = mysqli_connect('localhost', 'root', '123456', 'candlestudio') or DIE ('Не вдалося з’эднатися з БД');
require_once "database.php";

$dbc = db_connect();
$query = "SELECT * FROM `typescandles`";
$data = mysqli_query($dbc, $query);



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
		<div class="contentheader">
			<div class="left">
				<p><strong>Candle Studio</strong></p>
				<p>Виготовлення художніх різьблених свічкок на замовлення на будь-який смак</p>
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
					<div class="colorbox">
						<div class="i red"></div>
						<div class="i green"></div>
						<div class="i blue"></div>
						<div class="i orange"></div>
						<div class="i pink"></div>
						<div class="i white"></div>
						<div class="i black"></div>			
					</div>
					<div class="bigbox">
						<img class="imgcolor" src="img/У2.jpg" width="200" height="300" alt="">
						<img class="imgcolor" src="img/У1.jpg" width="200" height="300" alt="">
						<img class="imgcolor" src="img/У1.jpg" width="200" height="300" alt="">
						<img class="imgcolor" src="img/У2.jpg" width="200" height="300" alt="">
						<img class="imgcolor" src="img/У1.jpg" width="200" height="300" alt="">
						<img class="imgcolor" src="img/У2.jpg" width="200" height="300" alt="">
						<img class="imgcolor" src="img/У2.jpg" width="200" height="300" alt="">
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