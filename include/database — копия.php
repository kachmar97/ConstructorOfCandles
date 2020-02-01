<?php
define ('MYSQL_SERVER','localhost');
define ('MYSQL_USER','id8709088_root2');
define ('MYSQL_PASSWORD', '123456');
define ('MYSQL_DB', 'id8709088_candleconstructor');

function db_connect(){
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
        or die("Error: could not connect to database".mysqli_error($link));
    if(!mysqli_set_charset($link, "utf8")){
        print("Error: ".mysqli_error($link));
    }
    
    return $link;
}


?>