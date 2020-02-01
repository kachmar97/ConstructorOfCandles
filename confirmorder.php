<?php
	


	// Корзина (друга) показуэться тут тыльки пысля відправки форми
	// Треба поміняти вигляд відображення.............кастомізація
	// Забрати action
	// Зв’язати 2 таблиці.......як хз 
	


	session_start();

	require_once "include/database.php";

	$dbc = db_connect();

	function dump($var, $die = false, $all = false){
		?>
			<font style="text-align: left; ">
				<pre><?php print_r($var);?></pre>
			</font>
		<?php
	}

	// $action = $_POST["action"];
	// if ($action == 'order'){	
		$query = "INSERT INTO `orders`(`delivery`, `payment`, `lname`, `fname`, `surname`, `phone`, `email`, `city`, `street`, `house`, `apartment`, `comment`, `iptime`) VALUES ('".$_POST['delivery']."', '".$_POST['payment']."', '".$_POST['lname']."', '".$_POST['fname']."', '".$_POST['surname']."', '".$_POST['phone']."', '".$_POST['email']."', '".$_POST['city']."', '".$_POST['street']."', '".$_POST['house']."', '".$_POST['apartment']."', '".$_POST['comment']."', '".$_SERVER['SERVER_ADDR'].time()."')";	

	    $dodaty = mysqli_query($dbc, $query);
		//dump($_POST); 15.05.2019
		//echo "<br>"; 15.05.2019
	// }
	// if($action == 'test'){
		// dump($_POST);

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

	    foreach ($priceArray as $key => $value) {?>
						<!-- <div class="productitem" idnumber="<?php echo $key;?>">						 -->
		<?php 

		$query = "INSERT INTO `order_item` (`id_product`, `code`, `photo`, `name`, `count`, `price`, `total_price`, `iptime`) VALUES (".$key.", '".$value['code']."', '".$value['pic']."', '".$value['name']."', ".$value['count'].", ".$value['startPrice'].", ".$value['price'].", '".$_SERVER['SERVER_ADDR'].time()."')";
		$dodaty = mysqli_query($dbc, $query);

		}
	    //dump($priceArray);          15.05.2019
	// }

		echo '
		<div class="order-finish">
			<h2>Ваш заказ прийнято</h2>
			<p>Наш менеджер скоро зв’яжеться з вами. Дякуємо що обрали нас 🙂</p>
			<a class="continue-buy" href="/candlestudio/products.php">Продовжити покупки</a>	
		</div>';

	// echo "Відправка відбулася)";
?>