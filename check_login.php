<?php
include "connect_to_database.php";
// username and password sent from form
$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];

$token = md5($mypassword);

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

if ($mypassword != "") {
	$query = "SELECT * FROM users WHERE user_name = '$myusername' and password = '$token'";
	$result = mysql_query($query, $connection);

		// Mysql_num_row is counting table row
	$rows=mysql_num_rows($result);
		//If result matched $myusername and $mypassword, table row must be 1 row
		if($rows==1){
			//Register $myusername, $mypassword and redirect to file "logged_in.php"
			session_register("myusername");
			session_register("mypassword");
			header("location:logged_in.php");
		}
	
	else {
		echo "Fel användarnamn och/ eller lösenord";
	}
}
else {
echo "Du måste ange lösenord!";
}
?>