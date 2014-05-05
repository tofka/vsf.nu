<?php include "head.php"; ?>
	<body>
<?php include "connect_to_database.php" ?>
		<div id="wrap">
<?php include "meny.php" ?>
			<div id="left">
    			
        		<h2>Kalendarium</h2>
            	<p class="strong">Känner du till något evenemang som borde stå med här? Hör av dig till <a href="kontakt.php" title="Kontakta styrelsen">styrelsen</a>
                    eller <a href="mailto:webmaster@vsf.nu" title="kontakta webmaster">webmaster</a>!</p>
            
				<p class="strong">Kolla också in <a href="http://www.skovdefolk.se" target="_blank">Skövde Folk</a> och <a href="http://www.spelmansforbund.org" target="blank">Sveriges Spelmäns Riksförbund</a>
                    för fler evenemang!</p>
<?php
$query = "SELECT * FROM events WHERE date > DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 1 DAY) ORDER BY date;";
$result = mysql_query($query, $connection);

echo "<h3>Kommande evenemang</h3>
<table class='info'>";
	
while($array = mysql_fetch_array($result)) {
	$file_ref = $array['file'];
	echo "<tr><td>".$array["date_display"]."</td>
				<td><span class='strong'>".$array["header"]."</span> " .$array["description"];
				if ($array['file']!="") {
				echo " <a href='uploads/$file_ref' target='_blank'>$file_ref</a>" ;
				}
				
			echo "</td></tr>";				
}
echo "</table>";
?>
				
        
			</div>
<?php include "right.php"; ?>
<?php include "sidfot.php"; ?>
		</div>
<?php include "script_section.php"; ?>
	</body>
</html>
