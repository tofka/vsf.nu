<?php
session_start();
if(!session_is_registered('myusername')){
header("location:login.php");
}

$connection = mysql_connect("195.43.38.55", "webmaster", "w3bm4ster")or die("cannot connect");
mysql_select_db("vsf")or die("cannot select DB");

mysql_query("SET NAMES 'utf8'", $connection);	

$news_header = $_POST['news_header'];
$date = date('Y-m-d H:i:s');
$text = $_POST['text'];
$file = 'uploads/' . $_FILES['uploaded_file']['name'];
$author = $_SESSION['myusername'];

function BBCode($text) {
	$text = preg_replace('@\[url=([^]]*)\]([^[]*)\[/url\]@', '<a href="$1" target="_blank">$2</a>', $text);
	$text = preg_replace('@\[url\]([^[]*)\[/url\]@', '<a href="$1" target="_blank">$1</a>', $text);

	$parsedtext = str_ireplace(array_keys(), array_values(), $text);
	return $parsedtext;
}
$bb_text = BBCode($text);

$query = "INSERT INTO news (id, header, date, text, file, author) VALUES (0, '$news_header', '$date', '$bb_text', '$file', '$author')";
$result = mysql_query($query, $connection);
		if (!$result){
			echo "Fel: " . mysql_error();
		}
$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['uploaded_file']['name']); 
move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_path);
header("Location:index.php");
?>
