<?php
//--------- USUWANIE SESJI

session_start();

if (empty($_SESSION['login'])) 
{
	echo 'Nikt nie jest zalogowany';
}
else 
{
	//usunięcie sesji
	session_destroy();
	echo 'Wylogowano !';
	echo '<br><br><a href="index.php">Strona główna</a>';
}

?>


