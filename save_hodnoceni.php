<?php

ob_start();               // cachujeme vystup
  if(isset($_POST['sent'])){      // pokud byl odeslan formular pokracuj timto
$hodnoceni_struktura=$_POST['hodnoceni_struktura'];
$hodnoceni_myslenky=$_POST['hodnoceni_myslenky'];
$hodnoceni_zdroje=$_POST['hodnoceni_zdroje'];
$ID_c=$_POST['ID_clanku'];
$ID_user_rec=$_POST['ID_user_rec'];

$prumer =  ($hodnoceni_struktura + $hodnoceni_myslenky + $hodnoceni_zdroje)/3;
//echo $prumer;

include "db.php";





 $vloz = $connect->prepare("INSERT into recenze (ID_clanku, ID_user_rec, struktura, myslenky, zdroje, prumer) VALUES(?, ?, ?, ?, ?, ?)");
// Vykonání dotazu
$vysledek = $vloz->execute(array(
  $ID_c, 
  $ID_user_rec,
  $hodnoceni_struktura,
  $hodnoceni_myslenky,
  $hodnoceni_zdroje, 
  $prumer
  
));
 

}
header("location:page.php?page=hodnoceni.php");
?>