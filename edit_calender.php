<?php
session_start();
if(!session_is_registered('myusername')){
header("location:login.php");
}
include "connect_to_database.php";
if (isset($_POST['delete'])) {
	$checked = $_POST["id"];
	foreach ($checked as $delete_id){
		$query = "delete from events where id='$delete_id';";	
		mysql_query($query, $connection);
	}
	header ("location:kalendarium.php");
}
	else if (isset($_POST['update'])) {
	$checked = $_POST['id'];
	foreach ($checked as $update_id){
		$query = "SELECT * FROM events WHERE id = '$update_id';";
		$result = mysql_query($query, $connection);
	}
		while($array = mysql_fetch_array($result)) {
    	$date = $array['date'];
		$date_display = $array['date_display'];		
		$header = $array['header'];
		$description = $array['description'];
		include 'head.php';

		echo "<body>
		<div id='wrap'>";
include "meny.php";
echo "<div id='left'>
            <h2>Styrelsens sidor</h2>";
include "admin_left.php";       
echo "
			<div id='admin_content'>
				<h3>Ändra eller radera evenemang i kalendariet</h3>			
				<div id='admin_form'>
					<form enctype='multipart/form-data' method='post' action='update_calender.php'>
						<label for='new_header'>Rubrik: </label><input type='text' name='new_header' id='new_header' value='$header' />
                		<label for='new_date'>Datum: </label><input type='text' name='new_date' id='new_date' value='$date' />
                		<label for='new_date_display'>Visat datum: </label><input type='text' name='new_date_display' id='new_date_display' value='$date_display' />
                		<label for='new_description'>Beskrivning: </label>
                		<script>edToolbar('new_description');</script>                             
                		<textarea name='new_description' id='new_description' class='ed' cols='50' rows='10'>".$description."</textarea>
                		<input type='hidden' name='MAX_FILE_SIZE' value='96000000' />
		    			<label for='uploaded_file'>Ladda upp fil:</label>
    					<input name='new_uploaded_file' id='new_uploaded_file' type='file' />	
        				<input type='hidden' id='id' name='id' value='$update_id' />";
		}
echo "
						<input type='submit' name='updated' value='Spara' />
					</form>
				</div>";
	}
?>
			</div>
		</div>
			<?php include "right.php"; ?>
			<?php include "sidfot.php"; ?>

		</div>
<?php include "script_section.php"; ?>
	</body>
</html>