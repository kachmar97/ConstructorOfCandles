<?php
session_start();

// $mysqli = new mysqli('localhost', 'root', '123456', 'candlestudio');
require_once "include/database.php";

$mysqli = db_connect();
$query = "set names utf8";
$mysqli->query($query);

$action = $_POST["action"];
if ($action == 'show'){
   if (!(isset($_SESSION['cart']))){
       echo ' У вас немає замовлень';
       exit;
   };
   $cart = $_SESSION['cart'];
   if (count($cart) == 0){
       echo 'У вас немає замовлень';
       exit;
   }
   
   
   
   
   
echo "<h2>Корзина</h2>";

   for ($i = 0; $i < count($cart); $i++){
       $idProduct = $cart[$i]["idProduct"];
       $query = 'select * from products where id = '.$cart[$i]["idProduct"].'';
       $results = $mysqli->query($query);
       while($row = $results->fetch_assoc()){
        echo '<div class="item" idnumber="'.$row["id"].'" codeofitem="'.$row["code"].'">
                <i class="fa fa-times-circle removeitem" title="Видалити товар" onClick="delFromCart('.$row["id"].')"></i>
                <img class="itemelement" src="img/'.$row["photo"].'" alt="">
                <h3 class="itemelement">'.$row["name"].'</h3>
                <div class="itemelement basket_count">
                  <div class="basket_count_btn basket_count_minus">−</div>
                  <input type="text" class="basket_count_val" readonly value="1">
                  <div class="basket_count_btn basket_count_plus">+</div>
                </div>
                <p class="itemelement basket_price"><span value="'.$row["price"].'">'.$row["price"].'</span> грн.</p>
              </div>';                               
       }
       
   }
   // echo '<hr class="basket_line">
   //  <div class="bottomtotal">
   //    <button class="basket_continue_shopping">Продовжити покупки</button>
   //    <div class="totalbox">
   //      <div class="totaltext">Всього: </div>
   //      <div class="totalprice">142000 грн.</div>
   //      <button class="basket_buybtn">Купити</button>
   //    </div>  
      
   //  </div>';
}

############################
if ($action == 'add'){
    $cart = $_SESSION['cart'];

  $id = $_POST['id'];
  $code = $_POST['code'];
  $photo = $_POST['photo'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $newProduct["idProduct"] = $id;
  // $queryIns = "INSERT INTO `order_item` (`code`, `photo`, `name`, `price`, `total_price`) VALUES ('".$code."', '".$photo."', '".$name."', ".$price.", ".$price.")";
      // $queryIns = "INSERT INTO `order_item` (`id_product`, `code`, `photo`, `name`, `count`, `price`, `total_price`) VALUES (".$id.",'".$code."', '".$photo."', '".$name."', 1, ".$price.", `count`*".$price.")";
  // $query = 'select * from products where id = '.$cart[$i]["idProduct"].'';
      // $mysqli->query($queryIns);

  $cart[count($cart)] = $newProduct;
  
  $_SESSION['cart'] = $cart;


}

###########################
if ($action == 'del'){
    $id = $_POST["id"];
    $newCart = array();

    $cart = $_SESSION['cart'];
    for ($i = 0; $i < count($cart); $i++){
        $idProduct = $cart[$i]["idProduct"];
        if ($id != $idProduct){
            $newCart[count($newCart)] = $cart[$i];
        }
    }
    $_SESSION['cart'] = $newCart;
}

if ($action == 'clear'){
    unset($_SESSION['cart']);
}
?>