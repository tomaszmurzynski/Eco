<?php
//--------- SPRAWDZENIE DANYCH Z FORMULARZA

session_start();

if (empty($_SESSION['login']))
{
	//nikt nie jest zalogowany 
	if (((empty($_POST['login']))&&(empty($_POST['password'])))||(empty($_POST['login']))||(empty($_POST['password'])))
	{
		echo '
		<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Eco korporacja</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="author" content="Tomasz Murzynski" />
	
	<link rel="stylesheet" href="../css/style.css" type="text/css" />
	<link rel="stylesheet" href="../css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Joti+One|Lato:400,700|Open+Sans:400,700" rel="stylesheet">
	
	<!--[if] lt IE 9]>
	<script scr="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>

<body>

	<header>
	
		<h1 class="logo">Eco korporacja</h1>

		<nav>
			
			<ul class="menu">
				<li><a href="../index.php">Logowanie</a></li>
			</ul>

		</nav>
		
	</header>
	
	<main>
	
		<section>
			<div id="container">
				<div class="login">';
					echo 'Nie wprowadzono loginu lub hasła';
					echo '<br><br><a href="../index.php">Wróć</a>';
					echo '
				</div>
			</div>
		</section>
	
	</main>
	
	<footer>
	
		<div class="socials">
			<div class="socialdivs">
				<div class="fb">
					<i class="icon-facebook"></i>
				</div>
				<div class="yt">
					<i class="icon-youtube"></i>
				</div>
				<div class="tw">
					<i class="icon-twitter"></i>
				</div>
				<div class="gplus">
					<i class="icon-gplus"></i>
				</div>
				<div style="clear:both"></div>
			</div>
		</div>
		
		<div class="info">
			Wszelkie prawa zastrzeżone &copy; 2018 Dziękuję za wizytę!
		</div>
	
	</footer>
	
</body>
</html>
			';
		
			
	} 
	else 
	{
		$login=$_POST['login'];
		$haslo=$_POST['password'];
		$polaczenie = new mysqli('localhost','root','','ecohurt');
		$zapytanie = "select*from user where userLogin='$login' and userPassword='$haslo'";
		$wynik=mysqli_query($polaczenie,$zapytanie);
		$ile_rek=mysqli_num_rows($wynik);
		//ile rekordów spełniających zapytanie SQL
		if ($ile_rek==1) 
		{
			$_SESSION['login']=$_POST['login'];
			$_SESSION['haslo']=$_POST['password'];
			
			echo '
		<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Eco korporacja</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="author" content="Tomasz Murzynski" />
	
	<link rel="stylesheet" href="../css/style.css" type="text/css" />
	<link rel="stylesheet" href="../css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Joti+One|Lato:400,700|Open+Sans:400,700" rel="stylesheet">
	
	<!--[if] lt IE 9]>
	<script scr="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>

<body>

	<header>
	
		<h1 class="logo">Eco korporacja</h1>

		<nav>
			
			<ul class="menu">
				<li><a href="../index.php">Zarządzanie bazą danych</a></li>
			</ul>

		</nav>
		
	</header>
	
	<main>
	
		<section>
			<div id="container">
				<div class="login">';
					echo 'Witaj: '.$_SESSION['login'];
					echo '
					<form action="../script/wyloguj.php" method="post">
						<input type="submit" value="Wyloguj"/>
					</form>';
					echo '
				</div>
			</div>
		</section>
	
	</main>
	
	<footer>
	
		<div class="socials">
			<div class="socialdivs">
				<div class="fb">
					<i class="icon-facebook"></i>
				</div>
				<div class="yt">
					<i class="icon-youtube"></i>
				</div>
				<div class="tw">
					<i class="icon-twitter"></i>
				</div>
				<div class="gplus">
					<i class="icon-gplus"></i>
				</div>
				<div style="clear:both"></div>
			</div>
		</div>
		
		<div class="info">
			Wszelkie prawa zastrzeżone &copy; 2018 Dziękuję za wizytę!
		</div>
	
	</footer>
	
</body>
</html>
			';
			
			
			
					
		}
		else 
		{
					echo '
		<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Eco korporacja</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="author" content="Tomasz Murzynski" />
	
	<link rel="stylesheet" href="../css/style.css" type="text/css" />
	<link rel="stylesheet" href="../css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Joti+One|Lato:400,700|Open+Sans:400,700" rel="stylesheet">
	
	<!--[if] lt IE 9]>
	<script scr="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>

<body>

	<header>
	
		<h1 class="logo">Eco korporacja</h1>

		<nav>
			
			<ul class="menu">
				<li><a href="../index.php">Logowanie</a></li>
			</ul>

		</nav>
		
	</header>
	
	<main>
	
		<section>
			<div id="container">
				<div class="login">';
					echo 'Login lub hasło są nieprawidłowe !';
					echo '<br><br><a href="../index.php">Wróć</a>';	
					echo '
				</div>
			</div>
		</section>
	
	</main>
	
	<footer>
	
		<div class="socials">
			<div class="socialdivs">
				<div class="fb">
					<i class="icon-facebook"></i>
				</div>
				<div class="yt">
					<i class="icon-youtube"></i>
				</div>
				<div class="tw">
					<i class="icon-twitter"></i>
				</div>
				<div class="gplus">
					<i class="icon-gplus"></i>
				</div>
				<div style="clear:both"></div>
			</div>
		</div>
		
		<div class="info">
			Wszelkie prawa zastrzeżone &copy; 2018 Dziękuję za wizytę!
		</div>
	
	</footer>
	
</body>
</html>
			';
			
			
			
		}
	}

} 
else 
{
			echo '
		<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Eco korporacja</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="author" content="Tomasz Murzynski" />
	
	<link rel="stylesheet" href="../css/style.css" type="text/css" />
	<link rel="stylesheet" href="../css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Joti+One|Lato:400,700|Open+Sans:400,700" rel="stylesheet">
	
	<!--[if] lt IE 9]>
	<script scr="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>

<body>

	<header>
	
		<h1 class="logo">Eco korporacja</h1>

		<nav>
			
			<ul class="menu">
				<li><a href="../index.php">Logowanie</a></li>
			</ul>

		</nav>
		
	</header>
	
	<main>
	
		<section>
			<div id="container">
				<div class="login">';
					echo 'Witaj: '.$_SESSION['login'];
					echo '
					<form action="../script/wyloguj.php" method="post">
						<input type="submit" value="Wyloguj"/>
					</form>';
					echo '
				</div>
			</div>
		</section>
	
	</main>
	
	<footer>
	
		<div class="socials">
			<div class="socialdivs">
				<div class="fb">
					<i class="icon-facebook"></i>
				</div>
				<div class="yt">
					<i class="icon-youtube"></i>
				</div>
				<div class="tw">
					<i class="icon-twitter"></i>
				</div>
				<div class="gplus">
					<i class="icon-gplus"></i>
				</div>
				<div style="clear:both"></div>
			</div>
		</div>
		
		<div class="info">
			Wszelkie prawa zastrzeżone &copy; 2018 Dziękuję za wizytę!
		</div>
	
	</footer>
	
</body>
</html>
			';
	
	
	
}

?>