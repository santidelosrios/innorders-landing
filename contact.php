<?php
 
require 'connect.php';
echo "vamos bien";
$conn    = Connect();
echo "seguimos bien";
$name    = $conn->real_escape_string($_POST['u_name']);
$lastname    = $conn->real_escape_string($_POST['u_lastname']);
$email   = $conn->real_escape_string($_POST['u_email']);
$bono    = $conn->real_escape_string($_POST['u_bono']);
$message = $conn->real_escape_string($_POST['u_mensaje']); 
$query   = "INSERT into innorders_table_responses (name,last_name,email,mensaje,bono) VALUES('" . $name . "','" . $lastname . "','"  . $email . "','" . $message . "','" . $bono . "')";
$success = mysqli_query($conn,$query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
    echo $conn->error;
 
}

header("location:thanks.html");
 
$conn->close();
 
?>