<?php
//--------- LOGOWANIE JAKO UŻYTKOWNIK 
//--------- BAZY DANYCH

//--------- FORMULARZ LOGOWANIA 

session_start();

	if (empty($_SESSION['login']))
	{
	//nikt nie jest zalogowany 
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
	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css">
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
				<li><a href="#">Logowanie</a></li>
			</ul>

		</nav>
		
	</header>
	
	<main>
	
		<section>
			<div id="container">
				<div class="login">
	';
		echo '
				<form action="script/checkLogin.php" method="post">
					Podaj login<br><input type="text" name="login"/>
					<br>
					Podaj hasło<br><input type="password" name="password"/>
					<br>
					<input type="submit" value="Zaloguj"/>
				</form>
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
	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css">
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
				
				<li><a href="#">Zarządzanie bazą danych</a></li>
				
			</ul>

		</nav>
		
	</header>
	
	<main>
	
		<section>
			<div id="container">
				<div class="login">
	';
		echo 'Witaj: '.$_SESSION['login'];
		echo '
			<form action="script/wyloguj.php" method="post">
				<input type="submit" value="Wyloguj"/>
			</form>
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
					
				