<?php
require_once "include/database.php";

$dbc = db_connect();

$queryAllProducts = "SELECT * FROM `products` ORDER BY id DESC LIMIT 8";
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
<a href="index.php"><div class="maintab active">Головна</div></a>
<a href="products.php"><div class="maintab">Товари</div></a>
<a href="constructor.php#constructor-page"><div class="maintab">Конструктор</div></a>
<a href="contacts.php"><div class="maintab">Контакти</div></a>
<a href="aboutus.php"><div class="maintab">Про нас</div></a>
</div>
</header>

<div class="wrapper">
<h2 style="width: 1100px; margin: 20px auto; margin-top: 50px; text-align: center;">Різьблені свічки ручної роботи</h2>
<div class="slideshow-container">

<div class="mySlides fade">
<!-- <div class="numbertext">1 / 3</div> -->
<img src="img/setOfCandles/set2.jpg" style="width:100%">
<!-- <div class="sliderText">Caption Text</div> -->
</div>

<div class="mySlides fade">
<!-- <div class="numbertext">2 / 3</div> -->
<img src="img/setOfCandles/set5.jpg" style="width:100%">
<!-- <div class="sliderText">Caption Two</div> -->
</div>

<div class="mySlides fade">
<!-- <div class="numbertext">3 / 3</div> -->
<img src="img/setOfCandles/set1.jpg" style="width:100%">
<!-- <div class="sliderText">Caption Three</div> -->
</div>

<div class="mySlides fade">
<!-- <div class="numbertext">3 / 3</div> -->
<img src="img/setOfCandles/set4.jpg" style="width:100%">
<!-- <div class="sliderText">Caption Three</div> -->
</div>

<div class="mySlides fade">
<!-- <div class="numbertext">5 / 3</div> -->
<img src="img/setOfCandles/set3.jpg" style="width:100%">
<!-- <div class="sliderText">Caption Three</div> -->
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span> 
<span class="dot" onclick="currentSlide(2)"></span> 
<span class="dot" onclick="currentSlide(3)"></span> 
<span class="dot" onclick="currentSlide(4)"></span> 
<span class="dot" onclick="currentSlide(5)"></span> 
</div>
<div class="mainbox greenline">
<h3 class="sectionName">Новинки</h3>	
<a href="products.php"><h3 class="goToLink">Всі товари</h3></a>
</div>

<div class="mainbox productbox">
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
<?php
$i++;
}
?>
</div>
<div class="greenline">

</div>
<div class="mainbox greenline">
<h3 class="sectionName">Конструктор товару</h3>	
<a href="constructor.php#constructor-page"><h3 class="goToLink">Перейти до конструктора</h3></a>
</div>

<div class="mainbox constructor">
<p>Створіть свою унікальну різьблену свічку в нашому конcтрукторі товару</p>
<img src="img/constructorForm.png" alt="" width="70%">	
</div>

<div class="mainbox greenline ourContacts">
<h3 class="sectionName">Наші контакти</h3>	
<a href="contacts.php"><h3 class="goToLink">Контакти</h3></a>
</div>

<div class="mainbox contactsSection">
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

<div class="mainbox greenline mediaaboutus">
<h3 class="sectionName">Медіа про нас</h3>	
<a href="aboutus.php"><h3 class="goToLink">Про нас</h3></a>
</div>
<div class="mainbox aboutusvideo">
<iframe width="100%" height="100%" src="https://www.youtube.com/embed/GT29OYPBzBU" frameborder="0" allowfullscreen></iframe>	
</div>



<!-- 			<div class="mainbox greenline">
<h3 class="sectionName">Як з нами зв’язатися?</h3>	
<a href="constructor.php"><h3 class="goToLink">Контакти</h3></a>
</div> -->



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
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
showSlides(slideIndex += n);
}

function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1;}    
if (n < 1) {
slideIndex = slides.length;}
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";  
}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" activePhoto", "");
}
slides[slideIndex-1].style.display = "block";  
dots[slideIndex-1].className += " activePhoto";
}
</script>
</body>
</html>