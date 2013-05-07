<?php include "head.php"; ?>
	<body>

<?php include "connect_to_database.php"; ?>
	
		<div id="wrap">
<?php include "meny.php" ?>
        	<div id="left">
            	<h2>VSF:s spelmanslag</h2>
<?php
$query = "SELECT * FROM spelmanslag ORDER BY name;";
$result = mysql_query($query, $connection);

$rows = mysql_num_rows($result);
?>
				<p class="ingress">Här kan du läsa om alla spelmanslagen inom VSF. Just nu finns det 
<?php echo $rows;?> 
				stycken! Några av spelmanslagen träffas regebundet, medan vissa har mer sporadisk verksamhet. Vill du anmäla ditt spelmanslag? Kontakta oss! </p>
<table class='info'>
	<?php while($array = mysql_fetch_array($result)) {
	echo "
			<tr>
				<td><span class='strong'>".$array["name"]."</span><br/>
				".$array["contact_person"]."<br/>
				".$array["zip_town"]."<br/>
				".$array["phone"]."<br/>
				<a href='http://".$array["url"]."'>".$array["url"]."</a><br/>
				<a href='mailto:".$array["email"]."'>".$array["email"]."</a>
				</td>
				<td>".$array["description"]."</td>
			</tr>
		";
	}

?>
</table>            	
        	</div>
<?php include "right.php"; ?>
<?php include "sidfot.php"; ?>

    	</div>
<?php include "script_section.php"; ?>
	</body>
</html>
