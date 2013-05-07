<?php
session_start();
if(!session_is_registered('myusername')){
header("location:login.php");
}

$connection = mysql_connect("195.43.38.55", "webmaster", "w3bm4ster")or die("cannot connect");
mysql_select_db("vsf")or die("cannot select DB");

mysql_query("SET NAMES 'utf8'", $connection);	

$header = $_POST['header'];
$date = $_POST['date'];
$date_display = $_POST['date_display'];
$description = $_POST['description'];
$file = $_FILES['uploaded_file']['name'];

function BBCode($description) {
	$description = preg_replace('@\[url=([^]]*)\]([^[]*)\[/url\]@', '<a href="$1">$2</a>', $description);
	$description = preg_replace('@\[url\]([^[]*)\[/url\]@', '<a href="$1">$1</a>', $description);


	$parsedtext = str_ireplace($description);
	return $parsedtext;
}
$bb_description = BBCode($description);

$query = "INSERT INTO events (id, header, date, date_display, description, file) VALUES (0, '$header', '$date', '$date_display', '$bb_description', '$file');";
$result = mysql_query($query, $connection);
$target_path = "";
$target_path = $target_path . basename( $_FILES['uploaded_file']['name']); 
move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_path);
header("Location:kalendarium.php");
?>
