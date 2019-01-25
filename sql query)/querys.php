<?php 

define ('MYSQL_SERVER','localhost');
define ('MYSQL_USER','root');
define ('MYSQL_PASSWORD', '123456');
define ('MYSQL_DB', 'candlestudio');

function db_connect(){
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
        or die("Error: ".mysqli_error($link));
    if(!mysqli_set_charset($link, "utf8")){
        print("Error: ".mysqli_error($link));
    }
    
    return $link;
}

$dbc = db_connect();
for ($i=43; $i < 65; $i++) { 
	// А от і сам запит щоб змінити стандартну назву файлу фото на назву, яка складається з коду і розширення файлу)
	$query2 = "UPDATE `products` SET `photo` = concat(code, '.jpg')  WHERE `products`.`id` = $i";	
	mysqli_query($dbc, $query2);
}
?>