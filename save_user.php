<?php
session_start();
if(!session_is_registered('myusername')){
header("location:login.php");
}

include "connect_to_database.php";
$new_name = $_POST['new_name'];
$new_email = $_POST['new_email'];
$new_username = $_POST['new_username'];
$new_password = $_POST['new_password'];

$strong_pw = md5($new_password);

$query = "INSERT INTO users (id, name, email, user_name, password) VALUES (0, '$new_name', '$new_email', '$new_username', '$strong_pw')";
$result = mysql_query($query, $connection);
if (!$result) {
die(mysql_error());	
}
else {
header("location:logged_in.php");

}

?>
