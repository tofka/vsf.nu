<?php include "head.php"; ?>
	<body>
		<div id="wrap">

<?php include "meny.php" ?>

			<div id="left">
				<h2>Bli medlem!</h2>
				<p>Ett medlemskap kostar 100 kr per år till och med 18 år. 19 år och uppåt 275 kr per år. Du kan bli medlem
					genom att sätta in beloppet på Bankgiro 5949-4591. <span class="strong">Glöm inte ange namn och adress!</span>
				</p>
				<p>				
				Du kan också fylla i dina uppgifter i formuläret, så kommer vsf att höra av sig till dig inom kort! Har du frågor om medlemskap, 
				kontakta
				</p>
				<p>Anders Brissman<br/>
				Västra Långgatan 93 B<br/>
				543 33 Tibro<br/>
				Telefon: 0504 - 120 10</p>
	
				<p>Eller kontakta någon i <a href="kontakt.php"> styrelsen</a>.</p>				
				
				<div id="admin_form">
					<form action = "bli_medlem_send.php" method = "POST" name="medlemskap" accept-charset="utf-8">
										
						<label>Namn:
						<input type="text" name="namn" id="namn" /></label>				
						
						<label>Födelsedatum:
						<input type="text" name="fodelsedatum" id="fodelsedatum"/>					
						</label>

						<label>Adress:
						<input type="text" name="adress" id="adress"/>					
						</label>
						
						<label>C/o:
						<input type="text" name="co" id="co"/>					
						</label>
						
						<label>Postnummer:
						<input type="text" name="pnr" id="pnr"/>
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
											
						<label>Jag spelar:
						<textarea name="spelar" id="spelar" cols="30" rows="8"></textarea>
						</label>
						
						<input type="submit" name="skicka" id="skicka" value="Skicka"/>
						<input type="reset" name="rensa" id="rensa" value="Rensa"/>					
					</form>
				</div>
			</div>
<?php include "right.php"; ?>	
<?php include "sidfot.php"; ?>
		</div>
<?php include "script_section.php"; ?>
	</body>
</html>