<?php include "head.php"; ?>
	<body>
<?php include "connect_to_database.php"; ?>

		<div id="wrap">
<?php include "meny.php" ?>
			<div id="content">
				<div id="left">		
					<h2>Spelmansprofiler</h2>
			<ul>
<?php 
$query = "SELECT * FROM profiles";
$result = mysql_query($query, $connection);
if(!$result) {
	echo mysql_error();
}
while($array = mysql_fetch_array($result)) {
echo '<li><a href="' . $array['title'] . '.php">' . $array['title'] . '</a></li>';
	}

?>
					
					</ul>
				</div>
<?php include "right.php"; ?>
			</div>
<?php include "sidfot.php"; ?>
		</div>
<?php include "script_section.php"; ?>
	</body>
</html>