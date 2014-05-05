<?php include "head.php"; ?>
	<body>
<?php
//Gåva
$name = $_POST['namn'];
$birth_date = $_POST['fodelsedatum'];
$address = $_POST['adress'];
$town = $_POST['ort'];
$co = $_POST['co'];
$email = $_POST['e_p_o_s_t'];
$email_spam = $_POST['epost'];
$zip = $_POST['pnr'];
$phone = $_POST['telnr'];
$playing = $_POST['spelar'];
$email_subject = "Formulär: Ny medlem";
$email_body = "Ämne: Formulär: Ny medlem\n
	Namn: $name\n
	Födelsedatum: $birth_date\n
	Adress: \n
	$address\n
	$co\n
	$zip\n
	$town\n
	Telefon: $phone \n
	E-post: $email \n
	Spelar: $playing";
	
$headers = "Content-type: text/plain; charset=utf-8\r\n";
$to  = "karin.toft@comhem.se, anders.brissman@telia.com";

if (!$email_spam && $name != 'Förnamn Efternamn' && $name != '') {
	if(mail($to,$email_subject,$email_body,$headers)) {	
		echo "<div id='wrap'>";
		include "meny.php";
		echo "<div id='left'>
				<div class='overlay'><div class='message'><p>Tack för ditt meddelande! VSF kommer att höra av sig till dig inom kort!</p>
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