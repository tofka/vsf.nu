<?php include "head.php"; ?>
	<body>
<?php include "connect_to_database.php";?>
        <div id="wrap">
<?php include "meny.php" ?>
            <div id="left">
                <h2>Utmärkelser</h2>
                  	<!--****Ta bort när ej aktuellt-->
                	<h3>Zornveckan 2012 i Borås</h3>
					<p class="strong">
						Följande västgötar fick utmärkelser under Zornveckan 2012 i Borås. Läs mer på <a href="http://www.folkdansringen.se/Zorn/" target="_blank">Zornmärkesnämndens hemsida</a>.
					</p>
					<table class="info">
						<tr>
							<tr>
							<td>Bronsmärke</td>
							<td>Marika Jakobsson</td>
							<td>Skövde</td>
							<td>Fiol</td>
							
						</tr>
							<td>
								Bronsmärke
							</td>
							<td>
								Rebecka Westin
							</td>
							<td>
								Norra Vånga
							</td>
							<td>
								Fiol
							</td>
					
						</tr>
						<tr>
							<td>Bronsmärke</td>
							<td>Daniel Westin</td>
							<td>Sundsvall</td>
							<td>Fiol</td>
						</tr>
						<tr>
							<td>Diplom efter brons</td>
							<td>Fredrik Persson</td>
							<td>Partille</td>
							<td>Fiol</td>
						</tr>
						<tr>
							<td>Diplom efter brons</td>
							<td>John Strandberg Samuelsson</td>
							<td>Tidaholm</td>
							<td>Fiol</td>
						</tr>

						<tr>
							<td>Diplom</td>
							<td>Thomas Johannesson</td>
							<td>Göteborg</td>
							<td>Fiol</td>
						</tr>
						<tr> 
							<td>Diplom</td>
							<td>Franz-Benjamin Mocnik</td>
							<td>Westphalen, Tyskland</td>
							<td>Fiol</td>
						</tr>
						
						<tr>
							<td>Diplom</td>
							<td>Thomas Johansson</td>
							<td>Borås</td>
							<td>Nyckelharpa</td>
						</tr>
						<tr>
							<td>Diplom</td>
							<td>Anna Mogren</td>
							<td>Ulricehamn</td>
							<td>Fiol</td>
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