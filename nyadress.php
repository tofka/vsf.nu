<?php include "head.php"; ?>
<body>
<div id="wrap">

<?php include "meny.php" ?>

<div id="left">
<div>
<h1>Har du ny adress?</h1>
<p>Är du medlem och har bytt adress? Då är vi tacksamma om du meddelar oss dina nya uppgifter. Fyll i både din gamla och din nya adress
i formuläret nedan! Fält som är markerade med * är obligatoriska och måste fyllas i.
</p>
 
<h3>Din gamla adress:</h3>
<form action = "http://sc.digikom.net/formmail/formmail.asp" method = "POST" name="nyadress">
<input type = "hidden" name = "ToEmail" value = "form@vsf.nu">     
<input type = "hidden" name = "EmailSubject" value="Ny adress">
<input type = "hidden" name = "RedirectURL" value = "http://www.vsf.nu/tacksida.html">


<table id="formular">
	<tr>
		<td><label for="namn">Namn:</label>
		</td>
		<td><span id="sprynamn1">
		  <input type="text" name="namn" id="namn"/>
		  <span class="textfieldRequiredMsg">Du m&aring;ste ange ditt namn!</span></span>
		*			
		</td>
	</tr>

	<tr>
		<td><label for="fodelsedat">Födelsedatum:</label>
		</td>
		<td><span id="sprydatum1">
        <input type="text" name="fodelsedat" id="fodelsedat"/>
        <span class="textfieldRequiredMsg">Du m&aring;ste ange ditt f&ouml;delsedatum!</span><span class="textfieldInvalidFormatMsg">Ogiltigt format.</span></span>
		*			
		</td>
	</tr>

	<tr>
		<td><label for="adress">Adress:</label>
		</td>
		<td><span id="spryadress1">
		  <input type="text" name="adress" id="adress"/>
		  <span class="textfieldRequiredMsg">Du m&aring;ste ange din adress!</span></span>		
		  *			
		</td>
	</tr>

	<tr>
		<td><label for="co">Co:</label>
		</td>
		<td><input type="text" name="co" id="co"/></td>
	</tr>

	<tr>
		<td><label for="postnr">Postnr:</label>
		</td>
		<td><span id="sprypostnr">
        <input type="text" name="postnr" id="postnr"/>
        <span class="textfieldRequiredMsg">Du m&aring;ste ange ditt postnummer!</span><span class="textfieldInvalidFormatMsg">Ogiltigt format.</span></span>
		*			
		</td>
	</tr>

	<tr>
		<td><label for="ort">Ort:</label>
		</td>
		<td><span id="spryort">
		  <input type="text" name="ort" id="ort"/>
		  <span class="textfieldRequiredMsg">Du m&aring;ste ange ort!</span></span>
		*			
		</td>
	</tr>
	<tr>
		<td><label for="telnr">Telefonnummer:</label>
		</td>
		<td><span id="sprytelnr1">
		  <input type="text" name="telnr" id="telnr"/>
		  <span class="textfieldRequiredMsg">Du m&aring;ste ange ditt telefonnummer!</span></span>
		*			
		</td>
	</tr>
	<tr>
		<td><label for="epost">Epost:</label>
		</td>
		<td><span id="spryepost">
        <input type="text" name="epost" id="epost"/>
        <span class="textfieldRequiredMsg">Du m&aring;ste ange din epostadress!</span><span class="textfieldInvalidFormatMsg">Ogiltigt format.</span></span>
		*			
		</td>
	</tr>

</table>
<h3>Din nya adress:</h3>
<table id="formular">
		

	<tr>
		<td><label for="namn2">Namn:</label>
		</td>
		<td><span id="sprynamn2">
		  <input type="text" name="namn2" id="namn2"/>
		  <span class="textfieldRequiredMsg">Du m&aring;ste ange ditt namn!</span></span>
		*			
		</td>
	</tr>

	<tr>
		<td><label for="fodelsedat2">Födelsedatum:</label>
		</td>
		<td><span id="sprydatum2">
        <input type="text" name="fodelsedat2" id="fodelsedat2"/>
        <span class="textfieldRequiredMsg">Du m&aring;ste ange ditt f&ouml;delsedatum!</span><span class="textfieldInvalidFormatMsg">Ogiltigt format.</span></span>
		*			
		</td>
	</tr>

	<tr>
		<td><label for="adress2">Adress:</label>
		</td>
		<td><span id="spryadress2">
		  <input type="text" name="adress2" id="adress2"/>
		  <span class="textfieldRequiredMsg">Du m&aring;ste ange din adress!</span></span>
		*			
		</td>
	</tr>

	<tr>
		<td><label for="co2">Co:</label>
		</td>
		<td><input type="text" name="co2" id="co2"/>
				
		</td>
	</tr>

	<tr>
		<td><label for="postnr2">Postnr:</label>
		</td>
		<td><span id="sprypostnr2">
        <input type="text" name="postnr2" id="postnr2"/>
        <span class="textfieldRequiredMsg">Du m&aring;ste ange ditt postnummer!</span><span class="textfieldInvalidFormatMsg">Ogiltigt format.</span></span>
		*			
		</td>
	</tr>

	<tr>
		<td><label for="ort2">Ort:</label>
		</td>
		<td><span id="spryort2">
		  <input type="text" name="ort2" id="ort2"/>
		  <span class="textfieldRequiredMsg">Du m&aring;ste ange ort!</span></span>
		*			
		</td>
	</tr>
	<tr>
		<td><label for="telnr2">Telefonnummer:</label>
		</td>
		<td><span id="sprytelnr2">
		  <input type="text" name="telnr2" id="telnr2"/>
		  <span class="textfieldRequiredMsg">Du m&aring;ste ange ditt telefonnummer!</span></span>
		*			
		</td>
	</tr>
	<tr>
		<td><label for="epost2">Epost:</label>
		</td>
		<td><span id="spryepost2">
        <input type="text" name="epost2" id="epost2"/>
        <span class="textfieldRequiredMsg">Du m&aring;ste ange din epostadress!</span><span class="textfieldInvalidFormatMsg">Ogiltigt format.</span></span>
		*			
		</td>
	</tr>

	<tr>
		<td>
		</td>
		<td> <input type="submit" name="skicka" id="skicka" value="Skicka!"/>
			<input type="reset" name="rensa" id="rensa" value="Rensa!"/>
		</td>
	</tr>
</table>

</form>



</div>
<p class="tillbaka"><a href="medlem.php" title="Tillbaka">Tillbaka</a></p>

</div>
<?php include "right.php"; ?>
<?php include "sidfot.php" ?>
</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprynamn1", "none", {hint:"F\xF6rnamn Efternamn", validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprydatum1", "custom", {hint:"\xC5\xC5MMDD", validateOn:["blur"], useCharacterMasking:true, pattern:"000000"});
var sprytextfield3 = new Spry.Widget.ValidationTextField("spryadress1", "none", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprypostnr", "zip_code", {validateOn:["blur"], format:"zip_custom", pattern:"000 00", useCharacterMasking:true});
var sprytextfield5 = new Spry.Widget.ValidationTextField("spryort", "none", {validateOn:["blur"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytelnr1", "none", {validateOn:["blur"]});
var sprytextfield7 = new Spry.Widget.ValidationTextField("spryepost", "email", {validateOn:["blur"]});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprynamn2", "none", {hint:"F\xF6rnamn Efternamn", validateOn:["blur"]});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprydatum2", "custom", {hint:"\xC5\xC5MMDD", validateOn:["blur"], useCharacterMasking:true, pattern:"000000"});
var sprytextfield10 = new Spry.Widget.ValidationTextField("spryadress2", "none", {validateOn:["blur"]});
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprypostnr2", "zip_code", {format:"zip_custom", pattern:"000 00", useCharacterMasking:true, validateOn:["blur"]});
var sprytextfield12 = new Spry.Widget.ValidationTextField("spryort2", "none", {validateOn:["blur"]});
var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytelnr2", "none", {validateOn:["blur"]});
var sprytextfield14 = new Spry.Widget.ValidationTextField("spryepost2", "email", {validateOn:["blur"]});
//-->
</script>
<?php include "script_section.php"; ?>
</body>
</html>