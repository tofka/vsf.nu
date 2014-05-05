<?php include "head.php"; ?>
	<body>
		<div id="wrap">
<?php include "meny.php" ?>
			<div id="left">
			<h2>Har du ny adress?</h2>
			<p>Är du medlem och har bytt adress? Då är vi tacksamma om du meddelar oss dina nya uppgifter. Fyll i både din gamla och din nya adress
			i formuläret nedan!
			</p>
				<div id="admin_form">
					<form action = "ny_adress_send.php" method = "POST" name="nyadress" accept-charset="utf-8">
						<label>Namn:
						<input type="text" name="namn" id="namn"/>
						</label>
						
						<label>Födelsedatum:	
				        <input type="text" name="fodelsedat" id="fodelsedat"/>       			
						</label>	
					<h4>Din gamla adress:</h4>
						

						<label>Adress:	
						<input type="text" name="adress" id="adress"/>		  		
						</label>
					
						<label>Co:
						<input type="text" name="co" id="co"/>
						</label>
						
						<label>Postnr:
				        <input type="text" name="postnr" id="postnr"/>       			
						</label>
					
						<label>Ort:
						<input type="text" name="ort" id="ort"/>
						</label>
							
						<label>Telefonnummer:
					  	<input type="text" name="telnr" id="telnr"/> 	
						</label>
							
						<label>Epost:
				        <input type="text" name="e_p_o_s_t" />			
						</label>
						<label class="hidden">E-post: 
						<input class="hidden" type="text" name="epost" />
						</label>

						<h4>Din nya adress:</h4>										
						<label>Adress:	
						<input type="text" name="adress2" id="adress"/>		  		
						</label>
					
						<label>Co:
						<input type="text" name="co2" id="co"/>
						</label>
						
						<label>Postnr:
				        <input type="text" name="postnr2" id="postnr"/>       			
						</label>
					
						<label>Ort:
						<input type="text" name="ort2" id="ort"/>
						</label>
							
						<label>Telefonnummer:
					  	<input type="text" name="telnr2" id="telnr"/> 	
						</label>
							
						<label>Epost:
				        <input type="text" name="e_p_o_s_t2" id="epost"/>			
						</label>
						<input type="submit" name="skicka" id="skicka" value="Skicka"/>
						<input type="reset" name="rensa" id="rensa" value="Rensa"/>
					</form>
				</div>
			</div>		
<?php include "right.php"; ?>
<?php include "sidfot.php" ?>
		</div>
<?php include "script_section.php"; ?>
	</body>
</html>