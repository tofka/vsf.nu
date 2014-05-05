<?php
session_start();
if(!session_is_registered('myusername')){
header("location:login.php");
}
include "connect_to_database.php";
	if (isset($_POST['updated'])) {
		$new_date = $_POST['new_date'];
		$new_header = $_POST['new_header'];
		$new_text = $_POST['new_text'];
		$id = $_POST['id'];
		$author = $_SESSION['myusername'];

function BBCode($new_text) {
	$new_text = preg_replace('@\[url=([^]]*)\]([^[]*)\[/url\]@', '<a href="$1">$2</a>', $new_text);
	$new_text = preg_replace('@\[url\]([^[]*)\[/url\]@', '<a href="$1">$1</a>', $new_text);

	$parsedtext = str_ireplace(array_keys(), array_values(), $new_text);
	return $parsedtext;
}
		$bb_new_text = BBCode($new_text);
		$query = "UPDATE news SET date = '$new_date', header = '$new_header', text = '$bb_new_text', author = '$author' WHERE id = '$id';";
		$result = mysql_query($query, $connection);
		if (!$result){
			echo "Fel: " . mysql_error();
		}
		header("Location:index.php");
	}
?>