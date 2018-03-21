<?php
//--------- SPRAWDZENIE DANYCH Z FORMULARZA

session_start();

if (empty($_SESSION['login']))
 {
	//nikt nie jest zalogowany 
	if (((empty($_POST['log']))&&(empty($_POST['has'])))||(empty($_POST['log']))||(empty($_POST['has'])))
	 {
		echo 'Nie wprowadzono loginu lub/i hasła';
		echo '<br><br><a href="index.php">Wróć</a>';	
	} 
	else 
	{
		$login=$_POST['log'];
		$haslo=$_POST['has'];
		$polaczenie = new mysqli('localhost','root','','baza_testowa');
		$zapytanie = "select*from loginy where login='$login' and haslo='$haslo'";
		$wynik=mysqli_query($polaczenie,$zapytanie);
		$ile_rek=mysqli_num_rows($wynik);
		//ile rekordów spełniających zapytanie SQL
		if ($ile_rek==1) 
		{
			$_SESSION['login']=$_POST['log'];
			$_SESSION['haslo']=$_POST['has'];
			echo $_SESSION['login'].'<br><br>';
			echo session_id().'<br>';
			echo session_name();	
			echo '<br><br><a href="wyloguj.php">Wyloguj</a>';		
		}
		else 
		{
			echo 'Login lub/i hasło są nieprawidłowe !';
			echo '<br><br><a href="index.php">Wróć</a>';	
		}
	}

} 
else 
{
	echo 'Aktualnie zalogowany jest: '.$_SESSION['login'];
}

?>




