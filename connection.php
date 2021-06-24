<?php

 	$servername = "localhost";  
    $username = "root";  
    $password = ""; 
    $db_name = "payment_link_db";

    $connection = mysqli_connect("$servername","$username","","$db_name");

    if(!$connection){
    	die("Connection failed: ".mysqli_connect_error());
    }

?>