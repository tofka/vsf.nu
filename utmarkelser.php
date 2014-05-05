<?php include "head.php"; ?>
	<body>
<?php include "connect_to_database.php";?>
        <div id="wrap">
<?php include "meny.php" ?>
            <div id="left">
                <h2>Utmärkelser</h2>
                  	<!--****Ta bort när ej aktuellt-->
                	<h3>Zornutmärkelser 2013</h3>
					<p class="strong">
						Följande västgötar fick utmärkelser under Zornveckan 2013.
					</p>
					<table class="info">
						<tr>
							<td>Bronsmärke</td>
							<td>Franz-Benjamin Mocnik</td>
							<td>"För gott spel av Västgötalåtar"</td>
						</tr>
						<tr>
							<td>Bronsmärke</td>
							<td>Anna Mogren</td>
							<td>"För frejdigt spel av Västgötalåtar"</td>
						</tr>
						<tr>
							<td>Diplom efter bronsmärke</td>
							<td>Ida Malkolmsson</td>
							<td>"För gott spel på kohorn"</td>					
						</tr>
					</table>
					
					<!--****-->
                	
<?php echo "<h3>Riksspelmän:</h3>";
					
$query = "SELECT * FROM stipendiater WHERE stipendium ='Zorn' ORDER BY stip_year DESC;";
$result = mysql_query($query, $connection);

echo "<table class='info'>";
while($array = mysql_fetch_array($result)) {
	echo "<tr><td>" . $array['stip_year'] . "</td><td>" . $array['full_name'] . "</td><td>" . $array['town'] . "</td><td>" . $array['instrument'] . "</td><td class='italic'>\"" . $array['motivation'] . "\"</td>";
}
echo "</tr>
</table>";
?>
 				
	        </div>
<?php include "right.php"; ?>
<?php include "sidfot.php"; ?>
        </div>
<?php include "script_section.php"; ?>
    </body>
</html>