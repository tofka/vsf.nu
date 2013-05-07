<?php include "head.php"; ?>
	<body>
		<div id="wrap">
<?php include "meny.php" ?>
			<div id="left">				
					<h2>Låtar och visor</h2>
					<h3>Låtar och visor från Varakursen 2012</h3>
					<p class="ingress">Följande låtar och visor lärdes ut på årets Vara-kurs:</p>
<?php include "connect_to_database.php";
$query = "SELECT title, pdf_url, mp3_url FROM tunes WHERE id in (SELECT tune_id FROM vara WHERE class_name = 'Flöjt') ORDER BY title;";
$result = mysql_query($query, $connection);

$query = "SELECT title, pdf_url, mp3_url FROM tunes where id in (SELECT tune_id FROM vara) ORDER BY title;";
$result = mysql_query($query, $connection);
//echo "<h4>Viskursen:</h4>";
while ($array = mysql_fetch_array($result)) {
echo "<p>";
	if ($array['pdf_url'] != "") {
		echo "<a href='$array[pdf_url]' target='_blank' title='pdf'>".$array['title']."</a>";
	}
		else {
			echo $array['title'];
		}
	if ($array['mp3_url'] !="") {
		echo "<a href='$array[mp3_url]' title='Lyssna!'><img src='bilder/ikoner/not2.jpg' width='30' alt='Lyssna!' /></a>";
	}
	echo "</p>";
}
?>
				<h3>VSF:s låt- och vissamling</h3>
				<p class="ingress">Förbundet har en egen låt- och vissamling, som du får tillgång till som medlem. 
				Läs mer <a href="medlem.php" title="Medlemssidor">här</a> om hur du blir medlem! Här nedan finns register över de låtar och visor som ingår i samlingen. </p>
				<p>Notsamlingen ingår i medlemsavgiften. </p> 
				<p>Registren är i PDF-format. Vill du ha dem i annat format, eller om du saknar något enstaka notblad, så hör av dig till styrelsen! </p>
				<p><a href="files/registern.xls" title="Låtsamlingen">Låtsamlingen</a></p>
				<p><a href="files/registerv.pdf" title="Vissamlingen">Vissamlingen</a></p>			
			</div>
<?php include "right.php"; ?>
<?php include "sidfot.php"; ?>
			</div>
<?php include "script_section.php"; ?>
	</body>
</html>