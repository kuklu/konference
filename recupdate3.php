<?php
$rec3=$_POST['recenzent3'];
$clanek=$_POST['ID_clanky'];


include "db.php";

// Připravení dotazu
$zmena_rec3 = $connect->prepare("UPDATE clanky SET recenzent3 = ? WHERE ID_clanky = ?");
// Vykonání dotazu
$vysledek = $zmena_rec3->execute(array(
  $rec3, 
  $clanek,
  ));
  header("location:page.php?page=recenze.php");
?>