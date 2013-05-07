<div id="right">
  <?php include "connect_to_database.php" ?>

  <div id="fb-root"></div>
	<div id="startingress">
    <p>
     	Västergötlands Spelmansförbund bildades 1948, och anordnar aktiviteter för alla åldrar. 
		</p>    
		<div id="social_icons">
      <div class="social_icon">
        <a href="http://www.gastbok.net/gastbok/?gb=4059" target="_blank" title="Gästbok"><img id="guestbook" src="images/ikoner/penna.jpg" alt="Gästbok" />Gästbok</a></p>
      </div>    
      <div class="social_icon">
        <a href="https://www.facebook.com/pages/V%C3%A4sterg%C3%B6tlands-Spelmansf%C3%B6rbund/101176399957233" target="_blank" title="VSF på Facebook"><img id="fb" src="images/ikoner/f_logo.jpg" alt="VSF på Facebook" />VSF på Facebook</a>
      </div>
      <div class="social_icon">
      	<div class="fb-like" style="margin-bottom: 10px;" data-href="http://www.vsf.nu" data-send="false" data-layout="box_count" data-width="450" data-show-faces="false" data-font="arial">
        </div>      	
			</div>
    </div>
  </div>
  <div class="clear"></div>  	

<?php
$query = "SELECT * FROM events WHERE date > DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 1 DAY) ORDER BY date LIMIT 2";
$result = mysql_query($query, $connection);
if (!$result) {echo mysql_error();}
echo "<h3>Kommande evenemang:</h3>
<div id='kalenderpuff'>";
  
while($array = mysql_fetch_array($result)) {
  $file_ref = $array['file'];
  echo "<p><span class='strong'>" . $array["date_display"] . ": " . $array["header"] . "</span></p>
    
    <p> " . $array["description"];
        if ($array['file']!="") {
        echo " <a href='uploads/$file_ref' target='_blank'>$file_ref</a>" ;
        }
        
      echo "</p>";        
}
echo "</div>";
?>
<p>Se vårt <a href="kalendarium.php" title="Kalendarium">KALENDARIUM</a> för 
      kommande händelser!
</p>
</div>