<?php include "head.php"; ?>
	<body>
		<div id="wrap">
<?php include "meny.php" ?>
			<div id="content">
				<div id="left">		
					<h2>Epostlista</h2>
					<p>Vill du få nyheter via vår epostlista? I så fall kan du anmäla dig genom att fylla i formuläret nedan. Om du inte längre vill ha epost från VSF, så kan du även avanmäla dig
						genom formuläret. </p>
					<div id="admin_form">
						<form action = "epostlista_send.php" method = "POST" name="epostlista" accept-charset="utf-8">				
							<label>Namn:
							<input type="text" name="namn" id="namn"/>
							</label>				
						
							<label>Epostadress:
					        <input type="text" name="e_p_o_s_t" id="epostad"/>
							</label>
							<label class="hidden">E-post: 
							<input class="hidden" type="text" name="epost" />
							</label>
				
							<label>Anmälan:		
							<input type="radio" name="anm/avanm" id="anm/avanm" value="anmalan" checked="checked"/><br/>
							</label>
			
							<label>Avanmälan:		
							<input type="radio" name="anm/avanm" id="anm/avanm" value="avanmalan"/>
							</label>

							<input type="submit" name="skicka" id="skicka" value="Skicka"/>
							<input type="reset" name="rensa" id="rensa" value="Rensa"/>
						</form>
					</div>
				</div>
<?php include "right.php"; ?>
			</div>
<?php include "sidfot.php"; ?>
		</div>
<?php include "script_section.php"; ?>
	</body>
</html>