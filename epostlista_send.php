<?php include "head.php"; ?>
	<body>
<?php
//Gåva
$name = $_POST['namn'];
$anm_avanm = $_POST['anm/avanm'];
$message = $_POST['meddelande'];
$email = $_POST['e_p_o_s_t'];
$email_spam = $_POST['epost'];
$email_subject = "Formulär: Epostlista";
$email_body = "Ämne: Formulär: Epostlista\n
	Namn: $name\n
	E-post: $email\n
	Anmälan/ avanmälan: $anm_avanm";
	
$headers = "Content-type: text/plain; charset=utf-8\r\n";
$to  = "karin.toft@comhem.se, anders.brissman@telia.com";

if (!$email_spam) {
	if(mail($to,$email_subject,$email_body,$headers)) {	
		echo "<div id='wrap'>";
		include "meny.php";
		echo "<div id='left'>
				<div class='overlay'><div class='message'><p>Din adress är anmäld till epostlistan!</p>
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