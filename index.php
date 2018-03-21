<?php
//--------- LOGOWANIE JAKO UŻYTKOWNIK 
//--------- BAZY DANYCH

//--------- FORMULARZ LOGOWANIA 

session_start();

if (empty($_SESSION['login']))
 {
	//nikt nie jest zalogowany 
	echo '<form action="sprawdzenie.php" method="post"><br>
		login<br><input type="text" name="log"><br><br>
		hasło<br><input type="password" name="has">
		<br><br>
		<input type="submit" value="Zaloguj" id="przycisk">
	</form>';
} 
else 
{
	echo 'Aktualnie zalogowany jest: '.$_SESSION['login'];
}

?>




