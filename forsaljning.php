<?php include "head.php"; ?>
	<body>
<?php include "connect_to_database.php"; ?>
		<div id="wrap">
<?php include "meny.php" ?>
			<div id="left">
				<h2>Försäljning</h2>
				<div>
					<p class="ingress">Alla priser är exklusive porto och med reservation för ändringar. Du beställer genom att skicka epost eller vanligt brev till:</p>
					<p class="indrag"><span class="fet">Västergötlands Spelmansförbund</span><br/>
					C/o Anders Brissman<br/>
					Västra Långgatan 93 B<br/>
					543 33 Tibro<br/>
					Epost: anders.brissman[at]telia.com <br/>
					Telefon: 0504 - 120 10
				</div>
				<h3>Noter och böcker:</h3>
				

<?php 
$query = "SELECT * FROM shop where category = 1 ORDER BY title ";
$result = mysql_query($query, $connection);
if(!$result) {
	echo mysql_error();
}
$rows = mysql_num_rows($result);

?>
				
<table class='info'>
	<tr>
		<th>Titel</th>
		<th>Beskrivning</th>
		<th>Pris</th>
	</tr>
	<?php while($array = mysql_fetch_array($result)) {
	echo "
			<tr>
				<td>".$array["title"] . 
				"</td>
				<td>".$array["description"]."</td>
				<td>".$array["price"]."</td>
			</tr>
		";
	}

?>
</table>   
<h3>Kassetter och cd:</h3>
				

<?php 
$query = "SELECT * FROM shop where category =2 ORDER BY title";
$result = mysql_query($query, $connection);
if(!$result) {
	echo mysql_error();
}
$rows = mysql_num_rows($result);

?>
				
<table class='info'>
	<tr>
		<th>Titel</th>
		<th>Beskrivning</th>
		<th>Pris</th>
	</tr>
	<?php while($array = mysql_fetch_array($result)) {
	echo "
			<tr>
				<td>".$array["title"] . 
				"</td>
				<td>".$array["description"]."</td>
				<td>".$array["price"]."</td>
			</tr>
		";
	}

?>
</table>  
<h3>Övrigt:</h3>
				

<?php 
$query = "SELECT * FROM shop where category =3 ORDER BY title";
$result = mysql_query($query, $connection);
if(!$result) {
	echo mysql_error();
}
$rows = mysql_num_rows($result);

?>
				
<table class='info' style="min-width: 98%">
	<tr>
		<th>Titel</th>
		<th>Beskrivning</th>
		<th>Pris</th>
	</tr>
	<?php while($array = mysql_fetch_array($result)) {
	echo "
			<tr>
				<td>".$array["title"] . 
				"</td>
				<td>".$array["description"]."</td>
				<td>".$array["price"]."</td>
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