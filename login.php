<?php
session_start();
include "head.php";
?>
	<body>
		<div id="box">
			<div id="login_form">
				<h2>Logga in:</h2>
			<form method="post" name="login_form" action="check_login.php">
				<label for="myusername">Användarnamn: </label>
				<input type="text" name="myusername" id="myusername" />
				<label for="mypassword">Lösenord: </label>
				<input type="password" name="mypassword" id="mypassword" />
				<input type="submit" value="Logga in!" />
			</form>
			</div>
		</div>
<?php include "script_section.php"; ?>
		
	</body>
</html>
