<?php
session_start();
if (!isset($_SESSION['myusername'])) {
   header("Location: login.php");
   exit;
}
include "head.php"; 
?>
    <body>
        <div id="wrap">
<?php include "meny.php" ?>
            <div id="left">
            <h2>Styrelsens sidor</h2>
<?php include "admin_left.php" ?>       
				<div id="admin_content">
<?php echo "<h3>Välkommen " . $_SESSION['myusername'] . "! Du är nu inloggad på styrelsens sidor.</h3>
<p><a href='files/instruktioner.pdf' target='_blank'>Instruktioner till Styrelse-sidorna</a></p>"; ?>
				</div>
            </div>
<?php include "right.php"; ?>
<?php include "sidfot.php" ?>
        </div>
<?php include "script_section.php"; ?>
    </body>
</html>
