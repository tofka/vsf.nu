<?php
session_start();
if(!session_is_registered('myusername')){
header("location:login.php");
}
include "head.php";
?>
    <body>
        <div id="wrap">
<?php include "meny.php" ?>
            <div id="left">
            <h2>Styrelsens sidor</h2>
<?php include "admin_left.php" ?>       
				<div id="admin_content">
<?php
include "connect_to_database.php";
echo "<h3>Ändra eller radera nyhet</h3>";

$query = "SELECT * FROM news ORDER BY date DESC;";
$result = mysql_query($query, $connection);
$rows = mysql_num_rows($query, $connection);

echo "<table id='edit_post'>";
while ($array = mysql_fetch_array($result)) {
	$date = $array['date'];
	$header = $array['header'];
    $id = $array['id'];

  	echo "<form action='edit_news.php' method='POST'>
  			<tr>
  				<td>".$date."</td>
  				<td>".$header."</td>
  				<td><input type='checkbox' name='id[]' value='" . $id. "'></td>
  			</tr>";
}
echo "</table>
<input type='submit' name='update' value='Ändra'>
<input type='submit' name='delete' value='Ta bort'>
</form>";
?>
				</div>
            </div>
<?php include "right.php"; ?>
<?php include "sidfot.php" ?>
        </div>
<?php include "script_section.php"; ?>
    </body>
</html>
