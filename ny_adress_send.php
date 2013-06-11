<?php include "head.php"; ?>
	<body>
<?php
//Gåva
$name = $_POST['namn'];
$birth_date = $_POST['fodelsedat'];
$address1 = $_POST['adress'];
$co1 = $_POST['co'];
$zip1 = $_POST['postnr'];
$town1 = $_POST['ort'];
$phone1 = $_POST['telnr'];
$email1 = $_POST['e_p_o_s_t'];
$email_spam = $_POST['epost'];

$address2 = $_POST['adress2'];
$co2 = $_POST['co2'];
$zip2 = $_POST['postnr2'];
$town2 = $_POST['ort2'];
$phone2 = $_POST['telnr2'];
$email2 = $_POST['e_p_o_s_t2'];

$email_subject = "Formulär: Ny adress";
$email_body = "Ämne: Formulär: Ny adress\n
	Namn: $name\n
	Födelsedatum: $birth_date\n
	Gammal adress: $address1\n
	Gammal co: $co1\n
	Gammalt postnummer: $zip1\n
	Gammal ort: $town1\n
	Gammalt telnr: $phone1\n
	Gammal epost: $email1\n
	Ny adress: $address2\n
	Ny co: $co2\n
	Nytt postnummer: $zip2\n
	Ny ort: $town2\n
	Nytt telnr: $phone2\n
	Ny epost: $email2";
	
$headers = "Content-type: text/plain; charset=utf-8\r\n";
$to  = "karin.toft@comhem.se, anders.brissman@telia.com";

if (!$email_spam) {
	if(mail($to,$email_subject,$email_body,$headers)) {	
		echo "<div id='wrap'>";
		include "meny.php";
		echo "<div id='left'>
				<div class='overlay'><div class='message'><p>Din adressändring har tagits emot!</p>
					<button class='close'>Stäng</button></div>
				</div>
		        </div>";	
		include "right.php"; 
		include "sidfot.php"; 
	  	echo "</div>";
		include "script_section.php";
		echo "<script>
			$(document).ready(function() {				
				$('.overlay').fadeIn(600);
				$('.close').click(function() {					
					$('.overlay').fadeOut(600);
					window.location.replace('http://www.vsf.nu');
				});
			});
		</script>";

		echo "</body>
		</html>";

	}
	else {
		echo "<p>Det gick inte att skicka meddelandet</p>";
	}
}
else {
	echo "<p>Det gick inte att skicka meddelandet</p>";
}
?>