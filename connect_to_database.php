<?php
$db_hostname = "195.43.38.55";
$db_username = "webmaster";
$db_password = "w3bm4ster";
$db_database = "vsf";

$connection = mysql_connect($db_hostname, $db_username, $db_password);
if (!$connection) {
	die("Det gick inte att ansluta till databasen. Felmeddelande: " . mysql_error());
}
mysql_select_db($db_database) or die("Det gick inte att välja databas. Felmeddelande: " . mysql_error());

mysql_query("SET NAMES 'utf8'", $connection);	

?>