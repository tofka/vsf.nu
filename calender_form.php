<?php
session_start();
if(!session_is_registered('myusername')){
header("location:login.php");
}
?>
<?php include "head.php"; ?>
    <body>
        <div id="wrap">
<?php include "meny.php";?>
            <div id="left">
                <h2>Styrelsens sidor</h2>
<?php include "admin_left.php" ?>       
				<div id="admin_content">
          		<h3>Lägg till evenemang i kalendariet</h3>
                <div id="admin_form">
                <form enctype="multipart/form-data" method="post" action="calender_form_save.php">
                <label for="event_header">Rubrik: </label><input type="text" name="event_header" id="event_header" />
                <label for="date">Datum: </label><input type="text" name="date" id="date" placeholder="åååå-mm-dd" />
                <label for="date_display">Visat datum: </label><input type="text" name="date_display" id="date_display" />
                <label for="description">Beskrivning: </label>  
                <script>edToolbar('description');</script>                       
				<textarea name="description" id="description" class="ed" cols="50" rows="10"></textarea>
                <input type="hidden" name="MAX_FILE_SIZE" value="96000000" />
    			<label for="uploaded_file">Ladda upp fil:</label>
    			<input name="uploaded_file" id="uploaded_file" type="file" />
                <input type="submit" value="Spara" />
                </form>
                </div>
                </div>
			</div>
<?php include "right.php"; ?>
<?php include "sidfot.php"; ?>
        </div>
<?php include "script_section.php"; ?>
    </body>
</html>
