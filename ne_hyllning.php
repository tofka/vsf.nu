<?php include "head.php"; ?>
	<body>
		<div id="wrap">
	<?php include "meny.php" ?>
	        <div id="left">
	        	<h2>Hyllningsgåva</h2>
				<p>Du kan stödja framtida stipendiater av spelmän som tillägnar sig gehörstraditionen
	        	 från Skogstorp och den västgötska låttraditionen genom att ge en hyllningsgåva till 
	        	 fonden. Fyll i uppgifterna i formuläret.</p>
	        	 <div id="minnesblad"></div>	        	
	        	 <div id="admin_form">
					<form method="post" name="gava_form" action="ne_hyllning_form.php" accept-charset="utf-8">	
						<label>Namn på den som ska hyllas: <input type="text" name="person_name" value="Förnamn Efternamn" /></label>
						<label>Personlig hälsning: <textarea rows="10" name="greeting"></textarea></label>
						<label>Vem/vilka hyllningskortet är från: <textarea rows="10" cols="50" name="from_persons"></textarea></label>
						<p>Adress dit hyllningskortet ska skickas: </p>
							<input type="text" name="post_name" value="Förnamn Efternamn" />
							<input type="text" name="street" value="Gatuadress" />
							<input type="text" name="zip" value="Postnummer" />
							<input type="text" name="town" value="Ort" />
						
						<p>Dina uppgifter: </p>
							<input type="text" name="donor_name" value="Förnamn Efternamn" />
							<input type="text" name="donor_street" value="Gatuadress" />
							<input type="text" name="donor_zip" value="Postnummer" />
							<input type="text" name="donor_town" value="Ort" />
							<input type="text" name="donor_tel" value="Telefonnummer" />
							<input type="text" name="donor_email" value="E-post" />
							<label class="hidden">E-post: <input class="hidden" type="text" name="email" /></label>
							<label>Jag kommer att sätta in <input class="sum" type="text" name="donor_sum" /> kr på bankgiro 5949-4591. Märk betalningen med "NE" och ditt namn.</label>
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