<?php include "head.php"; ?>
	<body>
		<div id="wrap">

<?php include "meny.php" ?>

			<div id="left">
				<h1>Bli medlem!</h1>
				<p>Vill du bli medlem så kan du höra av dig till:</p>

				<p class="indrag">Västergötlands Spelmansförbund <br/>
				C/o Anders Brissman<br/>
				Västra Långgatan 93 B<br/>
				543 33 Tibro<br/>
				Telefon: 0504 - 120 10</p>
	
				<p>Eller kontakta någon i <a href="kontakt.php"> styrelsen</a>.</p>

				<p>Ett medlemskap kostar 150 kr per år till och med 18 år. 19 år och uppåt 275 kr per år. Sätt in beloppet på Bankgiro 5949-4591
				<span class="fet">Men glöm inte ange namn och adress!</span></p>
				
				<p>Du kan också fylla i formuläret nedan och klicka på "Skicka". Fält som är markerade med * är obligatoriska och måste fyllas i.</p>	 

				<form action = "http://sc.digikom.net/formmail/formmail.asp" method = "POST" name="medlemskap" accept-charset="ISO-8859-1">
				<input type = "hidden" name = "ToEmail" value = "form@vsf.nu">     
				<input type = "hidden" name = "EmailSubject" value="Ny medlem">
				<input type = "hidden" name = "RedirectURL" value = "http://www.vsf.nu/tacksida.html">

				<table id="formular">
					<tr>	
						<td><label for="namn">Namn:</label></td>
						<td><span id="sprynamn"><input type="text" name="namn" id="namn" />
		  				<span class="textfieldRequiredMsg">Skriv ditt namn!.</span></span> *</td>
					</tr>
					<tr>	
						<td><label for="fodelsedatum">Födelsedatum:</label></td>
						<td><span id="sprydatum"><input type="text" name="fodelsedatum" id="fodelsedatum"/>
        				<span class="textfieldRequiredMsg">Du m&aring;ste ange f&ouml;delsedatum.</span><span class="textfieldInvalidFormatMsg">Ogiltigt format.</span></span> *</td>
					</tr>
					<tr>	
						<td><label for="adress">Adress:</label></td>
						<td><span id="spryadress"><input type="text" name="adress" id="adress"/><span class="textfieldRequiredMsg">Du m&aring;ste ange din adress.</span></span> *</td>
					</tr>
					<tr>	
						<td><label for="co">C/o:</label></td>
						<td><input type="text" name="co" id="co"/></td>
					</tr>
					<tr>	
						<td><label for="pnr">Postnummer:</label></td>
						<td><span id="sprypostnr"><input type="text" name="pnr" id="pnr"/><span class="textfieldRequiredMsg">Du m&aring;ste ange ditt postnummer!</span><span class="textfieldInvalidFormatMsg">Ogiltigt format.</span></span> *</td>
					</tr>
					<tr>	
						<td><label for="ort">Ort:</label></td>
						<td><span id="spryort"><input type="text" name="ort" id="ort"/><span class="textfieldRequiredMsg">Du m&aring;ste ange ort!</span></span> *</td>
					</tr>
					<tr>	
						<td><label for="telnr">Telefonnummer:</label></td>
						<td><span id="sprytelnr"><input type="text" name="telnr" id="telnr"/><span class="textfieldRequiredMsg">Du m&aring;ste ange ditt telefonnummer!</span></span> *</td>
					</tr>
					<tr>	
						<td><label for="epost">Epost:</label></td>
						<td><!--<span id="spryepost">--><input type="text" name="epost" id="epost"/><span class="textfieldRequiredMsg">Du m&aring;ste ange din epostadress!</span><span class="textfieldInvalidFormatMsg">Ogiltigt format.</span><!--</span>--> *</td>
					</tr>
					<tr>	
						<td><label for="spelar">Jag spelar:</label></td>
						<td><textarea name="spelar" id="spelar" cols="30" rows="8"></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="skicka" id="skicka" value="Skicka!"/><input type="reset" name="rensa" id="rensa" value="Rensa"/></td>
					</tr>
				</table>
				</form>

				<p class="tillbaka"><a href="medlem.php" title="Tillbaka">Tillbaka</a></p>
			</div>
<?php include "right.php"; ?>	
<?php include "sidfot.php"; ?>

		</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprynamn", "none", {validateOn:["blur"], hint:"F\xF6rnamn Efternamn"});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprydatum", "custom", {validateOn:["blur"], hint:"\xC5\xC5MMDD", pattern:"000000", useCharacterMasking:true});
var sprytextfield3 = new Spry.Widget.ValidationTextField("spryadress", "none", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprypostnr", "zip_code", {format:"zip_custom", pattern:"000 00", useCharacterMasking:true, validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("spryort", "none", {validateOn:["blur"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytelnr", "none", {validateOn:["blur"]});
var sprytextfield7 = new Spry.Widget.ValidationTextField("spryepost", "email", {validateOn:["blur"]});
//-->
</script>
<?php include "script_section.php"; ?>
	</body>
</html>