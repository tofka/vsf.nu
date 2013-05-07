<?php include "head.php"; ?>
	
	<body>
<?php include "meny.php"; ?>
		<div id="wrap">
			<div id="left">
				<div id="admin_form">
					<form>
						<legend>Till minne av:</legend>
						<label>Namn: <input type="text" name="first_name" placeholder="Namn Namn" /></label>
						<label>Datum för ceremoni: <input type="text" name="date" placeholder="åååå-mm-dd" /></label>
						<label>Belopp: <input type="text" name="amount" placeholder="Belopp" /> kr </label>
						<label>Från: <input type="text" name="from" placeholder="Namn Namn" /></label>
						<input type="submit" value="skicka">						
					</form>
				</div>
				<div id="minnesblad">
				</div>
			</div>
<?php include "right.php"; ?>
<?php include "sidfot.php"; ?>
		</div>
	</body>
</html>