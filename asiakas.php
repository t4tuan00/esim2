<?php include "menu.php";?>
<h1>Asiakkaat</h1>
<?php 
include "yhteys.php";
$sql="SELECT etunimi,sukunimi FROM asiakkaat";
$asiakkaat=$db->query($sql);
	echo "<TABLE border=1>";
	echo "<TR><TH>Etunimi</TH><TH>Sukunimi</TH></TR>";
	foreach ($asiakkaat as $rivi) {
		echo'<TR><TD>' .$rivi['etunimi'].'</TD><TD> '.$rivi['sukunimi'].'</TD></TR>';
}
echo"</table>";

?>
<?php include "footer.php";?>