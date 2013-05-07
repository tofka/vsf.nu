<?php include "head.php"; ?>
	<body>
		<div id="wrap">
<?php include "meny.php" ?>
	<div id="content">
	<div id="left">
		<div>
			<h1>Epostlista</h1>
			<p>Vill du få nyheter via vår epostlista? I så fall kan du anmäla dig genom att fylla i formuläret nedan. <strong>OBS! Du som har varit
				med på den gamla epostlistan måste anmäla dig på nytt! </strong> Om du inte längre vill ha epost från VSF, så kan du även avanmäla dig
				genom formuläret. Fält som är markerade med * är obligatoriska och måste fyllas i.</p>
			<form action = "http://sc.digikom.net/formmail/formmail.asp" method = "POST" name="epostlista">
			<input type = "hidden" name = "ToEmail" value = "form@vsf.nu">     
			<input type = "hidden" name = "EmailSubject" value="Epostlista">
			<input type = "hidden" name = "RedirectURL" value = "http://www.vsf.nu/tacksida.html">
			<table id="formular">
				<tr>
					<td><label for="namn">Namn:</label></td>
					<td><span id="sprynamn"><input type="text" name="namn" id="namn"/><span class="textfieldRequiredMsg">Du m&aring;ste ange ditt namn!</span></span>*</td>
				</tr>
				<tr>
					<td><label for="epostad">Epostadress:</label></td>
		<td><span id="spryepost">
        <input type="text" name="epostad" id="epostad"/>
        <span class="textfieldRequiredMsg">Du m&aring;ste ange din epostadress!</span><span class="textfieldInvalidFormatMsg">Ogiltigt format.</span></span>
		*
		</td>
	</tr>


	<tr>
		<td><label for="anm/avanm">Anmälan:</label>
		</td>
		<td><input type="radio" name="anm/avanm" id="anm/avanm" value="anmalan" checked="checked"/><br/>
		</td>
	</tr>

	<tr>
		<td><label for="anm/avanm">Avanmälan:</label>
		</td>
		<td><input type="radio" name="anm/avanm" id="anm/avanm" value="avanmalan"/>
		</td>
	</tr>

	<tr>
		<td><label for="meddelande">Meddelande:</label>
		</td>
		<td><textarea name="meddelande" id="meddelande" rows="8" cols="30"></textarea>
		</td>
	</tr>

	<tr>
		<td>
		</td>
		<td> <input type="submit" name="skicka" id="skicka" value="Skicka!"/>
			<input type="reset" name="rensa" id="rensa" value="Rensa!"/>

</table>
</form>
</div>
<p class="tillbaka"><a href="medlem.php" title="Tillbaka">Tillbaka</a></p>

</div>
<?php include "right.php"; ?>
</div>
<?php include "sidfot.php"; ?>
</div>
<script>
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprynamn", "none", {validateOn:["blur"], hint:"F\xF6rnamn Efternamn"});
var sprytextfield2 = new Spry.Widget.ValidationTextField("spryepost", "email", {validateOn:["blur"]});
//-->
</script>
<script src="SpryAssets/SpryValidationTextField.js"></script>
<?php include "script_section.php"; ?>
</body>
</html>