<?php include "head.php"; ?>
    <body>
<?php include "connect_to_database.php";?>
        <div id="wrap">
<?php include "meny.php" ?>
            <div id="left">
                <h2>Länkar</h2>
                <div>
                    <p class="strong">
                        Här finner du länkar till spelmansförbund och annat som kan vara till nytta för 
                        den folkmusikintresserade!
                    </p>
                </div>
                
<?php				
					

	echo "<h3>Andra spelmansförbund i Västra Götalandsregionen:</h3>";

$query = "SELECT * FROM links WHERE header='Andra spelmansförbund i Västra Götalandsregionen' ORDER BY link_text;";
$result = mysql_query($query, $connection);
echo "<ul>";
while($array = mysql_fetch_array($result)) {
	echo "<li><a href='http://".$array['href']."' target='_blank' title='".$array['link_text']."'>".$array['link_text']."</a> ".$array['info']."</li>";
	
}
echo "</ul>";

echo " <p>
                        Resten av landets spelmansförbund hittar du genom Sveriges Spelmäns Riksförbund:
                    </p>
                    <p>
                        <a href='http://www.spelmansforbund.org' title='Sveriges Spelmäns Riksförbund'>Sveriges Spelmäns Riksförbund</a>
                    </p>";
	
	echo "<h3>Notsamlingar:</h3>";
					
$query = "SELECT * FROM links WHERE header='Notsamlingar'ORDER BY link_text;";
$result = mysql_query($query, $connection);
echo "<ul>";
while($array = mysql_fetch_array($result)) {
	echo "<li><a href='http://".$array['href']."' target='_blank' title='".$array['link_text']."'>".$array['link_text']."</a> ".$array['info']."</li>";
	
}
echo "</ul>";

echo "<h3>Instrumentbyggare och reparatörer:</h3>";
					
$query = "SELECT * FROM links WHERE header='Instrumentbyggare och reparatörer'ORDER BY link_text;";
$result = mysql_query($query, $connection);
echo "<ul>";
while($array = mysql_fetch_array($result)) {
	echo "<li><a href='http://".$array['href']."' target='_blank' title='".$array['link_text']."'>".$array['link_text']."</a> ".$array['info']."</li>";
	
}
echo "</ul>";

echo "<h3>Övrigt:</h3>";
					
$query = "SELECT * FROM links WHERE header='Övrigt'ORDER BY link_text;";
$result = mysql_query($query, $connection);
echo "<ul>";
while($array = mysql_fetch_array($result)) {
	echo "<li><a href='http://".$array['href']."' target='_blank' title='".$array['link_text']."'>".$array['link_text']."</a> ".$array['info']."</li>";
	
}
echo "</ul>";

?>
               
            
        </div>
<?php include "right.php"; ?>
<?php include "sidfot.php"; ?>
        </div>
<?php include "script_section.php"; ?>
    </body>
</html>
