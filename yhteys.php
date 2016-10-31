<?php
$palvelin="mysql:host=localhost; dbname=esim2";
try {
	$db=new PDO($palvelin,"phpuser","phppass");
	//echo "yhteys OK";

} catch (Exception $e) {
	//echo "ERROR" .$e->getmessage();
	echo "Tietokantaan ei saatu yhteyttä, ota yhteys ylläpitoon";

}


?>