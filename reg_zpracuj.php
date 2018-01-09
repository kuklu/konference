<?php
 
ob_start();               // cachujeme vystup
  if(isset($_POST['sent'])){      // pokud byl odeslan formular pokracuj timto
$email=$_POST['email'];
$heslo1=$_POST['heslo1'];
$heslo2=$_POST['heslo2'];
$jmeno=$_POST['jmeno'];
$prijmeni=$_POST['prijmeni'];
$funkce=$_POST['funkce'];

/*if($heslo1 != $heslo2){
   
    header ("Location: page.php?page=login.php&message=Neshodná hesla");	
    exit;
    }
*/

  require "db.php";  
  $passh=md5($heslo1);  // zahashujeme heslo

//ověření zda je email v databázi
$unikat = $connect->prepare("SELECT 1 FROM users WHERE email = ?");
$unikat->execute(array($email));
$existujeEmail = $unikat->fetchColumn();

$existujeEmail ? $backlink="page.php?page=registrace.php" : $backlink ="page.php?page=ok.php";
 

 
 
 
 
 
 
 //   if($heslo1=="" or $email==""){ // pokud nebylo vyplněno něco z toho, co je povinné, dáme vědět a skript ukončíme
//      $backlink="index.php?page=registrace&Alert=1";
//    }else{              // povinné udaje vyplněny vsechny
        // pripojime se k databazi
//      }elseif($heslo1 != $heslo2){    // pokud se hesla nerovnají
//        $backlink="index.php?page=registrace&Alert=3";
//      }else{            // hesla se shoduji, vlozime tedy data do databaze

// Připravení dotazu
$vloz = $connect->prepare("INSERT into users (email, heslo, jmeno, prijmeni, funkce, prava, schvalen) VALUES(?, ?, ?, ?, ?, ?, ?)");
// Vykonání dotazu
$vysledek = $vloz->execute(array(
  $email, 
  $passh,
  $jmeno,
  $prijmeni,
  $funkce,
  "1",
  "0"
));




/**


 *     $VlozData= "INSERT INTO users (email, heslo, jmeno, prijmeni, funkce, prava, schvalen)
 *                 VALUES ('$email','$passh','$jmeno','$prijmeni','$funkce','1','0')  ";
 *        
 *         if (mysqli_query($link, $VlozData)) {
 *     echo "Tak už jsi přihlášen/a";
 * } else {
 *     echo "Error: " . $VlozData . "<br>" . mysqli_error($link);
 */
}    
//mysqli_close($link);
   
// pokud pouzijete HEADER LOCATION tak by pred nim nemelo byt zadne platne ECHO
//echo "<a href='index.php'>tudy zase zpátky</a>";
// mail s potvrzením
//if ( Mail($email, "Registrace do systému byla úspěšná","Vaše registrace do systému byla úspěšná.<br />
//Registrace bude potvrzena administrátorem.") )
//echo "Mail byl odeslán";
//else echo "Mail se nepodařilo odeslat"; 
// samozrejme zde muze byt presmerovani na jinou stranku pomoci
header ("Location: $backlink");
ob_end_flush();
?>