<?php
session_start();
if(!session_is_registered('myusername')){
header("location:login.php");
}
include "connect_to_database.php";
	if (isset($_POST['updated'])) {
		$new_date = $_POST['new_date'];
		$new_date_display = $_POST['new_date_display'];
		$new_header = $_POST['new_header'];
		$new_description = $_POST['new_description'];
		$id = $_POST['id'];
		$new_file = $_FILES['new_uploaded_file']['name'];
		$author = $_SESSION['myusername'];
		
		function BBCode($new_description) {
			$new_description = preg_replace('@\[url=([^]]*)\]([^[]*)\[/url\]@', '<a href="$1" target="_blank">$2</a>', $new_description);
			$new_description = preg_replace('@\[url\]([^[]*)\[/url\]@', '<a href="$1" target="_blank">$1</a>', $new_description);

			$parsedtext = str_ireplace(array_keys(), array_values(), $new_description);
			return $parsedtext;
		}
		$bb_new_description = BBCode($new_description);
		$query = "UPDATE events SET date = '$new_date', date_display ='$new_date_display', header = '$new_header', description = '$bb_new_description', file = '$new_file', author = '$author' WHERE id = '$id';";
		mysql_query($query, $connection);
		$target_path = "uploads/";
		$target_path = $target_path . basename( $_FILES['new_uploaded_file']['name']); 
		move_uploaded_file($_FILES['new_uploaded_file']['tmp_name'], $target_path);
		header("Location:kalendarium.php");
	}
?>