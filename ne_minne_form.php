<?php include "head.php"; ?>
	<body>
<?php
$person_name = $_POST['person_name'];
$greeting = $_POST['greeting'];
$post_name = $_POST['post_name'];
$post_street = $_POST['post_street'];
$post_zip = $_POST['post_zip'];
$post_town = $_POST['post_town'];
$donor_name = $_POST['donor_name'];
$donor_street = $_POST['donor_street'];
$donor_zip = $_POST['donor_zip'];
$donor_town = $_POST['donor_town'];
$donor_tel = $_POST['donor_tel'];
$donor_email = $_POST['donor_email'];
$email_spam = $_POST['email'];
$donor_sum = $_POST['donor_sum'];
$email_from = 'www.vsf.nu';
$email_subject = "Formulär: Minnesgåva";
$email_body = "Ämne: Formulär: Minnesgåva\n
Namn: $person_name\n
Hälsning: $greeting\n
Adress för minneskort: \n
$post_name\n
$post_street\n
$post_zip\n
$post_town\n
Givare: \n
$donor_name\n
$donor_street\n
$donor_zip\n
$donor_town\n
Telefon: $donor_tel \n
E-post: $donor_email \n
Summa: $donor_sum";

$headers = "Content-type: text/plain; charset=utf-8\r\n";

$to = "karin.toft@comhem.se, anders.brissman@telia.com";

if (!$email_spam && $person_name != 'Förnamn Efternamn' && $person_name != '') {
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