<?php include "head.php"; ?>
	<body>
<?php include "connect_to_database.php"; ?>

		<div id="wrap">
<?php include "meny.php" ?>
			<div id="content">
				<div id="left">	

<?php $query = "SELECT content FROM profiles WHERE title='Filip Engkvist'";
$result = mysql_query($query, $connection);
if(!$result) {
	echo mysql_error();
}	
while($array = mysql_fetch_array($result)) {
echo $array['content'];
	}
?>
			
				</div>
<?php include "right.php"; ?>
			</div>
<?php include "sidfot.php"; ?>
		</div>
<?php include "script_section.php"; ?>
	</body>
</html>