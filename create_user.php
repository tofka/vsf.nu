<?php
session_start();
if(!session_is_registered('myusername')){
header("location:login.php");
}

include "head.php";
?>
	<body>
		<div id="box">
			<div id="admin_form">
				<h3>Skapa ny användare:</h3>
				<form method="post" name="login_form" action="save_user.php">
				<label for="new_name">Namn: </label>
				<input type="text" name="new_name" id="new_name" />
				<label for="new_email">Epost: </label>
				<input type="text" name="new_email" id="new_email" />
				<label for="new_username">Användarnamn: </label>
				<input type="text" name="new_username" id="new_username" />
				<label for="new_password">Lösenord: </label>
				<input type="password" name="new_password" id="new_password" />
				<input type="submit" value="Spara användare" />
			</form>
			</div>
		</div>
<?php include "script_section.php"; ?>
	</body>
</html>
