<?php

// Radio Button
require_once "include/database.php";

$dbc = db_connect();

function queryFunction($color, $form, $dbc){
	$queryred = "SELECT * FROM `products` WHERE `label` = '".$color."' AND `form` = '".$form."'";
	$result = mysqli_query($dbc, $queryred);
	$row_cnt = mysqli_num_rows($result);
	if($row_cnt <= 0){
		echo "<p>На даний момент <br> немає свічок <br> у такому кольорі</p>";
	}
	while ($art1 = mysqli_fetch_assoc($result)) {
		echo '<img class="imgcolor" src="img/'.$art1["photo"].'" width="200" height="300" title="'.$art1["name"].'" alt="'.$art1["name"].'">';
	}

	return $result;
}

function queryFunction2($form, $dbc){
	$queryred = "SELECT * FROM `products` WHERE `label` = `label` AND `form` = '".$form."'";
	$result = mysqli_query($dbc, $queryred);
	$row_cnt = mysqli_num_rows($result);
	if($row_cnt <= 0){
		echo "<p>На даний момент <br> немає свічок <br> такої форми</p>";
	}
	while ($art1 = mysqli_fetch_assoc($result)) {
		echo '<img class="imgcolor" src="img/'.$art1["photo"].'" width="200" height="300" title="'.$art1["name"].'" alt="'.$art1["name"].'">';
	}
	return $result;
}

if(!isset($_POST["radioname"])){
	// error_reporting(0);
			// echo "<h1>На даний момент немає свічки у такому кольорі</h1>";
}

if(isset($_POST["radioname"])){


	//Піраміда
	if ($_POST["radioname"] == 'pyramid'){				
		if(isset($_POST["name"])){

			//Вибір кольору
			if($_POST["name"] == 'rgbbtn'){
				$showCandles = queryFunction2('pyramid', $dbc);
			}elseif($_POST["name"] == 'greenbtn'){
				$showCandles = queryFunction('green', 'pyramid', $dbc);
			}elseif ($_POST["name"] == 'redbtn') {
				$showCandles = queryFunction('red', 'pyramid', $dbc);
			}elseif ($_POST["name"] == 'orangebtn') {
				$showCandles = queryFunction('orange', 'pyramid', $dbc);
			}elseif ($_POST["name"] == 'yellowbtn') {
				$showCandles = queryFunction('yellow', 'pyramid', $dbc);
			}elseif ($_POST["name"] == 'pinkbtn') {
				$showCandles = queryFunction('pink', 'pyramid', $dbc);
			}elseif ($_POST["name"] == 'lingueebtn') {
				$showCandles = queryFunction('linguee', 'pyramid', $dbc);
			}elseif ($_POST["name"] == 'bluebtn') {
				$showCandles = queryFunction('blue', 'pyramid', $dbc);
			}elseif ($_POST["name"] == 'blackbtn') {
				$showCandles = queryFunction('black', 'pyramid', $dbc);
			}
		//Якщо колір ще не вибрано	
		}else{
			// error_reporting(0);
			$showCandles = queryFunction2('pyramid', $dbc);			// Піраміда по замовчуванню
		}
	}

	
	//Конус	
	elseif ($_POST["radioname"] == 'cone') {				
		if(isset($_POST["name"])){

			if($_POST["name"] == 'rgbbtn'){
				$showCandles = queryFunction2('cone', $dbc);
			}elseif($_POST["name"] == 'greenbtn'){
				$showCandles = queryFunction('green', 'cone', $dbc);
			}elseif ($_POST["name"] == 'redbtn') {
				$showCandles = queryFunction('red', 'cone', $dbc);
			}elseif ($_POST["name"] == 'orangebtn') {
				$showCandles = queryFunction('orange', 'cone', $dbc);
			}elseif ($_POST["name"] == 'yellowbtn') {
				$showCandles = queryFunction('yellow', 'cone', $dbc);
			}elseif ($_POST["name"] == 'pinkbtn') {
				$showCandles = queryFunction('pink', 'cone', $dbc);
			}elseif ($_POST["name"] == 'lingueebtn') {
				$showCandles = queryFunction('linguee', 'cone', $dbc);
			}elseif ($_POST["name"] == 'bluebtn') {
				$showCandles = queryFunction('blue', 'cone', $dbc);
			}elseif ($_POST["name"] == 'blackbtn') {
				$showCandles = queryFunction('black', 'cone', $dbc);
			}else{
				//Сюди користувач не мав би попасти
				echo "<h3>На даний момент немає кулі у такому кольорі</h3>";
			}	
		//Якщо колір ще не вибрано
		}else{
			$showCandles = queryFunction2('cone', $dbc);				// Конус по замовчуванню
		}	
	}

	//Куб	
	elseif ($_POST["radioname"] == 'cube') {				
		if(isset($_POST["name"])){

			if($_POST["name"] == 'rgbbtn'){
				$showCandles = queryFunction2('cube', $dbc);
			}elseif($_POST["name"] == 'greenbtn'){
				$showCandles = queryFunction('green', 'cube', $dbc);
			}elseif ($_POST["name"] == 'redbtn') {
				$showCandles = queryFunction('red', 'cube', $dbc);
			}elseif ($_POST["name"] == 'orangebtn') {
				$showCandles = queryFunction('orange', 'cube', $dbc);
			}elseif ($_POST["name"] == 'yellowbtn') {
				$showCandles = queryFunction('yellow', 'cube', $dbc);
			}elseif ($_POST["name"] == 'pinkbtn') {
				$showCandles = queryFunction('pink', 'cube', $dbc);
			}elseif ($_POST["name"] == 'lingueebtn') {
				$showCandles = queryFunction('linguee', 'cube', $dbc);
			}elseif ($_POST["name"] == 'bluebtn') {
				$showCandles = queryFunction('blue', 'cube', $dbc);
			}elseif ($_POST["name"] == 'blackbtn') {
				$showCandles = queryFunction('black', 'cube', $dbc);
			}else{
				//Сюди користувач не мав би попасти
				echo "<h3>На даний момент немає кулі у такому кольорі</h3>";
			}	
		//Якщо колір ще не вибрано
		}else{
			$showCandles = queryFunction2('cube', $dbc);				// Куб по замовчуванню
		}	
	}


	//Куля		
	elseif ($_POST["radioname"] == 'ball') {
		if(isset($_POST["name"])){

			if($_POST["name"] == 'rgbbtn'){
				$showCandles = queryFunction2('ball', $dbc);
			}elseif($_POST["name"] == 'greenbtn'){
				$showCandles = queryFunction('green', 'ball', $dbc);
			}elseif ($_POST["name"] == 'redbtn') {
				$showCandles = queryFunction('red', 'ball', $dbc);
			}elseif ($_POST["name"] == 'orangebtn') {
				$showCandles = queryFunction('orange', 'ball', $dbc);
			}elseif ($_POST["name"] == 'yellowbtn') {
				$showCandles = queryFunction('yellow', 'ball', $dbc);
			}elseif ($_POST["name"] == 'pinkbtn') {
				$showCandles = queryFunction('pink', 'ball', $dbc);
			}elseif ($_POST["name"] == 'lingueebtn') {
				$showCandles = queryFunction('linguee', 'ball', $dbc);
			}elseif ($_POST["name"] == 'bluebtn') {
				$showCandles = queryFunction('blue', 'ball', $dbc);
			}elseif ($_POST["name"] == 'blackbtn') {
				$showCandles = queryFunction('black', 'ball', $dbc);
			}else{
				//Сюди користувач не мав би попасти
				echo "<h3>На даний момент немає кулі у такому кольорі</h3>";
			}	
		//Якщо колір ще не вибрано
		}else{
			$showCandles = queryFunction2('ball', $dbc);				// Куля по замовчуванню
		}
	}


	//Многогранник
	elseif($_POST["radioname"] == 'polyhedron'){				
		if(isset($_POST["name"])){

			//Вибір кольору
			if($_POST["name"] == 'rgbbtn'){
				$showCandles = queryFunction2('polyhedron', $dbc);
			}elseif($_POST["name"] == 'greenbtn'){
				$showCandles = queryFunction('green', 'polyhedron', $dbc);
			}elseif ($_POST["name"] == 'redbtn') {
				$showCandles = queryFunction('red', 'polyhedron', $dbc);
			}elseif ($_POST["name"] == 'orangebtn') {
				$showCandles = queryFunction('orange', 'polyhedron', $dbc);
			}elseif ($_POST["name"] == 'yellowbtn') {
				$showCandles = queryFunction('yellow', 'polyhedron', $dbc);
			}elseif ($_POST["name"] == 'pinkbtn') {
				$showCandles = queryFunction('pink', 'polyhedron', $dbc);
			}elseif ($_POST["name"] == 'lingueebtn') {
				$showCandles = queryFunction('linguee', 'polyhedron', $dbc);
			}elseif ($_POST["name"] == 'bluebtn') {
				$showCandles = queryFunction('blue', 'polyhedron', $dbc);
			}elseif ($_POST["name"] == 'blackbtn') {
				$showCandles = queryFunction('black', 'polyhedron', $dbc);
			}
		//Якщо колір ще не вибрано	
		}else{
			// error_reporting(0);
			$showCandles = queryFunction2('polyhedron', $dbc);			// Многогранник по замовчуванню
		}		
	
	}else{
		echo "Немає свічок даної форми";
	}

}

	

?>