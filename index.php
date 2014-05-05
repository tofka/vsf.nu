<?php include "head.php"; ?>
    <body>    	        
<?php include "connect_to_database.php"; ?>
		  <div id="wrap">            
<?php include "meny.php"; ?>
          <div id="index_left">
            	<div id="images"><img src="images/2010/honsa8x.jpg" alt="" /></div>       
                <div id="index_logga">
                    <h2>Aktuellt</h2>
<?php				
$query = "SELECT * FROM news ORDER BY date desc LIMIT 3;";
$result = mysql_query($query, $connection);

while($array = mysql_fetch_array($result)) {
    $file_ref = $array['file'];
	$array['text'] = nl2br($array['text']);    
	echo "<h3>".$array['header']."</h3>
				<p><span class='news_date'> [".$array['date']."]</span><br/>"
				.$array['text'];
				if ($file_ref != "") {
				echo " <a href='uploads/$file_ref' target='_blank'>$file_ref</a>";
				}
				echo "</p>";
}
?>       
			    </div>
		   	</div>
<?php include "right.php"; ?>		
<?php include "sidfot.php" ?>
        </div>  
<?php include "script_section.php"; ?>   
	</body>
</html>