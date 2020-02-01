<?php
// $dbc = mysqli_connect('localhost', 'root', '123456', 'candlestudio') or DIE ('Не вдалося з’эднатися з БД');
require_once "include/database.php";

$dbc = db_connect();

$query = "SELECT * FROM `typescandles`";
$data = mysqli_query($dbc, $query);
// $j = 27;
// for ($i=43; $i <= 250; $i++) { 
// 	$query2 = "UPDATE `products` SET `form` = 'polyhedron' WHERE `label` = 'orange' OR `label` = 'yellow' OR `label` = 'green' OR `label` = 'pink' OR `label` ='blue'";	
// 	mysqli_query($dbc, $query2);
// 	$j++;
// }

$queryRed = "SELECT * FROM `products` WHERE `label` = 'red'";
$redCandles = mysqli_query($dbc, $queryRed);


$queryDecor = "SELECT * FROM `decor` WHERE id BETWEEN 32 AND 57 ORDER BY `id` DESC";
$decorElements = mysqli_query($dbc, $queryDecor);


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
<a href="products.php"><div class="maintab">Товари</div></a>
<a href="constructor.php#constructor-page"><div class="maintab active">Конструктор</div></a>
<a href="contacts.php"><div class="maintab">Контакти</div></a>
<a href="aboutus.php"><div class="maintab">Про нас</div></a>
</div>
</header>

<!-- Tab links -->
<div class="content">
	<a name="constructor-page"></a>
<div class="tab">
<button class="tablinks tab1 " id="defaultOpen" onclick="openCity(event, 'Form')">Форма</button>
<button class="tablinks tab2" onclick="openCity(event, 'Design')">Дизайн</button>
<button class="tablinks tab3" onclick="openCity(event, 'Decoration')" >Декорація</button>
<button class="tablinks tab4" onclick="openCity(event, 'Finish')" >Фініш</button>
</div>
</div>

<!-- Tab content -->
<div id="Form" class="tabcontent">
<div class="bottomline ">
<div class="bottomborder">
<div class="lefttools">
<h3>Виберіть форму свічки</h3>
<div class="forms">
<?php
$i=1;
while ($art = mysqli_fetch_assoc($data)) {
?>
<label for="r<?php echo $i?>">
<input 
type="radio" 
class="radiobtn" 
id="r<?php echo $i?>"
description="<?php echo $art["description"];?>"
name="candletype" 
value="img/CandlesForms/<?php echo $art["image"];?>" 
width="420"
height="630"

>
<?php echo $art["name"];?>
</label>
<br>
<?php
$i++;
}
?>	
</div>
<!-- <h3 class="candlesize">Розмір свічки: <span>16</span>см.</h3> -->
<!-- <input class="slider" type="range" min="1" max="11" id="size" oninput="sizePic()" value="6"> -->
<button id="nextbtn1" class="nextbtn tablinks" onclick="openCity(event, 'Design')">Далі</button>
</div>
<div class="modelcandle">

<img id="pic" src="" alt="" width="420">

</div>
</div>
</div>
</div>


<div id="Design" class="tabcontent">
<div class="bottomline ">
<div class="bottomborder">
<div class="lefttools ">
<h3>Виберіть колір свічки</h3>
<!-- <form  method="POST"> -->
<div class="colorbox">
<button class="i rgb" name="rgbbtn"></button>
<button class="i green" name="greenbtn"></button>
<button class="i red" name="redbtn"></button>
<button class="i orange" name="orangebtn"></button>
<button class="i yellow" name="yellowbtn"></button>
<button class="i pink" name="pinkbtn"></button>
<button class="i linguee" name="lingueebtn"></button>
<button class="i blue" name="bluebtn"></button>
<button class="i black" name="blackbtn"></button>		
</div>
<!-- </form> -->
<div class="bigbox" id="bigbox">
<!-- <h1 class="hideme" style="display: none">На даний момент немає свічки у такому кольорі</h1> -->

</div>
<button class="nextbtn nextbtn2 tablinks" onclick="openCity(event, 'Decoration')">Далі</button>
</div>
<div class="modelcandle choosecolor">
<!-- <h3 class="choosephoto">Виберіть фото свічки</h3> -->
<img id="pic2" src="" alt="" width="420">
</div>
</div>	
</div> 
</div>

<div id="Decoration" class="tabcontent">
<div class="bottomline ">
<div class="bottomborder">
<div class="lefttools">
<h3 class="choosedecor">Перетягніть елемент на свічку</h3>
<div id="offx"></div>
<div id="offy"></div>
<div class="bigbox bigboxgreen">
<?php
$i=1;
while ($dec = mysqli_fetch_assoc($decorElements)) {
?>
<!-- <div class="borderGreen"> -->
<div class="draggable">
<img class="decorelement" id="dec<?php echo $i?>" src="img/Decoration/<?php echo $dec["image"]?>" width="100" height="100" alt="">	
</div>					
<!-- </div>	 -->
<?php
$i++;
}
?>
</div>
<button class="nextbtn nextbtn3 get_images" id="save">Зберегти свічку</button>
</div>
<div class="modelcandle">
<div id="droppable">
<!-- <div class="white"></div> -->
<img id="pic3" src="" alt="" width="420" height="630">
<div class="myboxzxc">
<p>Перетягніть елeменет на фото</p>
<span>Для видалення двічі клацніть по елементу</span>
<p></p>
</div>
</div>

</div>
</div>
</div>
</div>
<div id="Finish" class="tabcontent">
<div class="lefttools">
<h3 class="cnadleready">Ваша свічка готова!</h3>
<hr>	
<p>Тепер ви можете скачати свічку на ваш пристрій</p>
<button id="saveAs" class="nextbtn">Скачати зображення</button>
<!-- <img src="img/Help/Save.png" alt="Save.png"> -->
</div>
<div class="modelcandle" id="preview">
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