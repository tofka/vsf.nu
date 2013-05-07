<?php
session_start();
if(!session_is_registered('myusername')){
header("location:login.php");
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
					<h3>Låtar och visor</h3>
<?php include "connect_to_database.php";
echo "<div id='admin_form'>
		<form method='post' action='vsflatar_result.php'>
			<label for='title_search'>Sök på titel: </label>
			<input type='text' name='title_search' id='title_search' />
			<label for='after_by_search'>Sök på meddelare/upphovsman: </label>
			<input type='text' name='after_by_search' id='after_by_search' />
			<label for='category_search'>Sök på kategori: </label>
			<input type='text' name='category_search' id='category_search' />
			<label for='from_place_search'>Sök på ort: </label>
			<input type='text' name='from_place_search' id='from_place_search' />
			<label for='reg_nr_search'>Sök på nr i vsf:s register: </label>
			<input type='text' name='reg_nr_search' id='reg_nr_search' />			
			<input type='submit' value='Sök!' />
		</form>
	</div>"; 
?>
				</div>
			</div>
<?php include "right.php"; ?>
<?php include "sidfot.php"; ?>
		</div>
<?php include "script_section.php"; ?>
	</body>
</html>