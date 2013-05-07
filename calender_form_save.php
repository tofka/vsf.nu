<?php
session_start();
if(!session_is_registered('myusername')){
header("location:login.php");
}

include "connect_to_database.php";

$event_header = $_POST['event_header'];
$date = $_POST['date'];
$date_display = $_POST['date_display'];
$description = $_POST['description'];
$file = $_FILES['uploaded_file']['name'];
//$file_name = $_POST['file_name'];
$author = $_SESSION['myusername'];

function BBCode($description) {
	$description = preg_replace('@\[url=([^]]*)\]([^[]*)\[/url\]@', '<a href="$1" target="_blank">$2</a>', $description);
	$description = preg_replace('@\[url\]([^[]*)\[/url\]@', '<a href="$1" target="_blank">$1</a>', $description);

	$parsedtext = str_ireplace(array_keys(), array_values(), $description);
	return $parsedtext;
}
$bb_description = BBCode($description);

$query = "INSERT INTO events (id, header, date, date_display, description, file, author) VALUES (0, '$event_header', '$date', '$date_display', '$bb_description', '$file', '$author');";
$result = mysql_query($query, $connection);
if (!$result) {echo mysql_error();}
$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['uploaded_file']['name']); 
move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_path);
header("Location:kalendarium.php");
?>
