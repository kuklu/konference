<?php
$rec1=$_POST['recenzent1'];
$clanek=$_POST['ID_clanky'];


include "db.php";

// Připravení dotazu
$zmena_rec1 = $connect->prepare("UPDATE clanky SET recenzent1 = ? WHERE ID_clanky = ?");
// Vykonání dotazu
$vysledek = $zmena_rec1->execute(array(
  $rec1, 
  $clanek,
  ));
  header("location:page.php?page=recenze.php");
?>