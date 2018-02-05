<?php
        $host= 'localhost';
        $db= 'opinie';
        $login= 'root';
        $haslo= '';
        $conn = mysqli_connect($host, $login, $haslo, $db);
        if($_POST)
        {
            $imie = $_POST['imie'];
            $czas = date('Y-m-d H:i:s');
            $opis = $_POST['opis'];
            $sql = $conn->query("INSERT INTO opinia (Imie, Czas, Opis) VALUES('$imie', '$czas' ,'$opis')");
        }
    ?>

<?php

	session_start();
?>
<!DOCTYPE HTML>

<html lang="pl">

<head>
	<meta charset="UTF-8">
	<title>Strona</title>
	<link rel="stylesheet" type="text/css" href="glowny.css">
	<script type="text/javascript" src="skrypty/aktualizacja.js"> </script> 
</head>


<body>

	<div id="pojemnik">
	
	
		<div id="naglowek">

</div>
	<div id="logowanie">
		<div id="formularz">										
			<?php						
				if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'])
				{
					echo 'Zalogowany jako: '.$_SESSION['login'].'&nbsp;&nbsp;</br>';
					echo '<form action="wyloguj.php" method="post"><input type="submit" value="Wyloguj"></input></form>';
				}
				else
				{
					// INSERT INTO asd SET kolumna = '.$_SESSION['login'].'
					echo '			<form action="zaloguj.php" method="post">
							&nbsp;&nbsp;Login:<input name="login"></input>
							
							&nbsp;&nbsp;Hasło:<input name="haslo"></input>
							<input type="submit" value="Zaloguj"></input>
							</form>';
																
					if(isset($_SESSION['blad']))
						echo $_SESSION['blad'];
				}
										
														
				  function rejestracja() {
					echo ' <form method="POST" action="rejestracja.php">
																				
							Podaj login: <input type="text" name="login"><br>
							Podaj hasło: <input type="text" name="haslo"><br>
							<input type="submit" value="wyślij!"> </form> ';
				  }

				  if (isset($_GET['hello'])) {
					rejestracja();
				  }
			?>
			
			Zarejestruj się! <br>
			<a href='index.php?hello=true'>Kliknij Tutaj!</a>									
		</div>									
	</div>
			
	<div id="menu">
	<?php
	if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'])
				{
					 echo '<a href="glowna.php" style="text-decoration:none;"><div class="menj">Strona Główna </div></a>';
					 echo '<a href="dodajartykul.php" style="text-decoration:none;"><div class="mend">Dodaj Artykuł</div></a>';
					
				}
		?>		
				
			
		
	</div>
					
	<div id="tresc">
		
	</div>		
	<div id="stopka">			
		<h2> Ostatnia aktualizacja strony :  <script>  czas(); </script> </h2>
	</div>
	
</div>
</body>
</html>