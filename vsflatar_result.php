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
				<h1>Styrelsens sidor</h1>
<?php include "admin_left.php" ?>       
				<div id="admin_content">
					<h2>Låtar och visor</h2>
<?php include "connect_to_database.php";
$title_search = $_POST['title_search'];
$after_by_search = $_POST['after_by_search'];
$category_search = $_POST['category_search'];
$from_place_search = $_POST['from_place_search'];
$reg_nr_search = $_POST['reg_nr_search'];

$query = "SELECT title, pdf_url FROM tunes where title ='$title_search' OR after_by = '$after_by_search' OR category ='$category_search' OR from_place ='$from_place_search' OR reg_nr = '$reg_nr_search';";
$result = mysql_query($query, $connection);
		$rows = mysql_num_rows($result);
		if ($rows>0) {
			echo "<h4>Din sökning gav följande resultat:</h4>";
			while ($array = mysql_fetch_array($result)) {
				echo "<p><a href='$array[pdf_url]' target='_blank'>".$array['title']."</a></p>";
			}
			echo "<p><a href='vsflatar.php'>Sök igen</a></p>";
		}
			else {
				echo "<p>Din sökning gav inga träffar!</p>
				<p><a href='vsflatar.php'>Sök igen!</a></p>";
			}
?>
				</div>
			</div>
<?php include "right.php"; ?>
<?php include "sidfot.php"; ?>
			</div>
<?php include "script_section.php"; ?>
	</body>
</html>