<?php include "head.php"; ?>
	<body>
<?php
//Gåva
$name = $_POST['name'];
$street = $_POST['street'];
$zip = $_POST['zip'];
$town = $_POST['town'];
$tel = $_POST['tel'];
$email = $_POST['e_p_o_s_t'];
$email_spam = $_POST['email'];
$sum = $_POST['sum'];
$email_from = 'www.vsf.nu';
$email_subject = "Formulär: Gåva";
$email_body = "Ämne: Formulär: Gåva\n
	Namn: $name\n
	Adress: \n
	$street\n
	$zip\n
	$town\n
	Telefon: $tel \n
	E-post: $email \n
	Summa: $sum";
$headers = "Content-type: text/plain; charset=utf-8\r\n";
$to  = "karin.toft@comhem.se, anders.brissman@telia.com";

if (!$email_spam) {
	if(mail($to,$email_subject,$email_body,$headers)) {	
		echo "<div id='wrap'>";
		include "meny.php";
		echo "<div id='left'>
		        	<h3>Tack för din gåva!</h3> 
		        	<p class='strong'>Återvänd till <a href='index.php' title='Start'>startsidan</a>.</p>
		        </div>";	
		include "right.php"; 
		include "sidfot.php"; 
	  	echo "</div>";
		include "script_section.php";
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
