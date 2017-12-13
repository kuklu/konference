<?php 
ob_start();
/*
* Tetno soubor zjisti zda se takovy uzivatel s takovym heslem v databazi nachazi. 
* Pokud ano, do sessions o tom ulozime informaci.
* Jinak se samozrejme presmerujeme zpet a dame uzivateli vedet, ze zadal spatne udaje
*/
session_start(); // Budeme pracovat se session, musíme je nastartovat.
if(isset($_POST['jmeno'])){
	require 'db.php';
	    $name = $_POST['email'];
	    $pass = md5($_POST['heslo']);
      echo $name."<br>";
      echo $pass;
		$query = MySQLi_Query($link, "SELECT * FROM `users` WHERE `jmeno` = '$name' and `pass` = '$pass'") or die (mysql_error());
		// Vybereme uživatele se zadaným jménem a heslem
			$Vysledek = mysql_fetch_array($query);
				$Vysledek['jmeno']; 
				if($Vysledek['jmeno']){ // pokud tato proměnná obsahuje data, bylo zadané správné jméno a heslo
					// Do sessions si uložíme pár informací o přihlášeném
					$_SESSION['prihlasen'] = 1;
					$_SESSION['login'] = $Vysledek['jmeno'];
					$_SESSION['UserId'] = $Vysledek['id'];
					$_SESSION['UserWeb'] = $Vysledek['web'];
					$_SESSION['UserMail'] = $Vysledek['mail'];
					$_SESSION['Prava'] = $Vysledek['prava'];
					$bl="index.php?page=start"; 
				header("location: $bl"); // přesměrujeme na index
        //echo "<br> LOG?".$_SESSION['prihlasen'];
        //echo "<br> ID?".$_SESSION['UserId'];
				}else{
					$bl="index.php?Alert=6";
					header("location: $bl"); // špatně zadané údaje
				//	 echo "Zadal jsi špatné údaje";
				}
		mysql_free_result($query);
}else{
	echo "Zde nic není;-)";
}
ob_end_flush();
?>
