<?php
function Connect()
{
 $dbhost = '192.95.31.78:3306';
 $dbuser = 'innorder_admin';
 $dbpass = 'D?ZiraG,XV3f';
 $dbname = 'innorder_contact';
 // Create connection
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die();

 if(mysqli_connect_error()){
 	echo "No se pudo conectar: " .mysqli_connect_error();
 }

 return $conn;
}
?>