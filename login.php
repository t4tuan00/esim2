<?php
session_start();
if(isset($_POST['nappi'])){
$oikeatunnus="TuuveLuu";
$oikeasalasana="työvinen";
	if($_POST['tunnus']==$oikeatunnus){
		if($_POST['salasana']==$oikeasalasana){
		$_SESSION['kirjautunut']=TRUE;
		$_SESSION['user']=$oikeatunnus;
		header('location:oma.php');
		}
	}
else{
		echo "wat in feik";
	}
}
?>

<?php include "menu.php";?>
<form method="POST" action="login.php">
<TABLE BORDER=0>
	<tr><td>Tunnus</td><td><input type="text" name="tunnus"></td></tr>
	<tr><td>Salasana</td><td><input type="password" name="salasana"></td></tr>
	<tr><td></td><td><input type="submit" name="nappi" value="kirjaudu"></td></tr>
</TABLE>
</form>



<?php include "footer.php";?>