<?php include "head.php"; ?>
	<body>
		<div id="wrap">
	<?php include "meny.php" ?>
	        <div id="left">
	        	<h2>Ge en gåva</h2>
	        	<p>Du kan stödja framtida stipendiater av spelmän som tillägnar sig gehörstraditionen
	        	 från Skogstorp och den västgötska låttraditionen genom att ge en gåva till 
	        	 fonden. Fyll i uppgifterna i formuläret.</p>
	        	<div id="minnesblad"></div>
				<div id="admin_form">
					<form method="post" name="gava_form" action="ne_gava_form.php">	
						<label>Namn: <input id="select" type="text" name="name" placeholder="Förnamn Efternamn" value="Förnamn Efternamn" /></label>					
						<label>Gatuadress: <input type="text" name="street" /></label>
						<label>Postnummer: <input type="text" name="zip" /></label>
						<label>Ort: <input type="text" name="town" /></label>
						<label>Telefon: <input type="text" name="tel" /></label>
						<label>E-post: <input type="text" name="e_p_o_s_t" /></label>
						<label class="hidden">E-post: <input class="hidden" type="text" name="email" /></label>
						<label>Jag kommer att sätta in: <input class="sum" type="text" name="sum" /> kr på bankgiro 5949-4591. Märk betalningen med "NE" och ditt namn.</label>
						<input type="submit" value="Skicka!">						
					</form>					
				</div>
				
	        </div>
	<?php include "right.php"; ?>
	<?php include "sidfot.php" ?>
	        </div>
	<?php include "script_section.php"; ?>
	</body>
</html>