<?php
session_start();
if (!isset($_SESSION['myusername'])) {
   header("Location: login.php");
   exit;
}
include "connect_to_database.php";
include "head.php"; 
?>
    <body>
        <div id="wrap">
<?php include "meny.php" ?>
            <div id="left">
            <h2>Styrelsens sidor</h2>
<?php include "admin_left.php" ?>       
				<div id="admin_content">
<h3>Allspelslåtar</h3>
<p>Följande låtar har varit aktuella som allspelslåtar eller lärts ut på kurser de senaste åren</p>
      <table id="edit_post">
<?php 
$query = "SELECT * FROM tunes";
$result = mysql_query($query, $connection);
if(!$result) {
  echo mysql_error();
}

while($array = mysql_fetch_array($result)) {
//$rows = mysqli_num_rows($result);
//for ($i = 0; $i > $rows; $i++){
  echo '<tr><td><span class="strong">' . $array['title'] . ': </span></td><td> ' . $array['category'] . ' efter ' . $array['after_by'] . ', ' . $array['from_place'] . '</td><td><a href="' . $array['pdf_url'] . '"> pdf</a></td></tr>';
//  }
}
?>
          
          </table>
				</div>
      </div>
<?php include "right.php"; ?>
<?php include "sidfot.php" ?>
        </div>
<?php include "script_section.php"; ?>
    </body>
</html>
