<?php
$rec2=$_POST['recenzent2'];
$clanek=$_POST['ID_clanky'];


include "db.php";

// Připravení dotazu
$zmena_rec2 = $connect->prepare("UPDATE clanky SET recenzent2 = ? WHERE ID_clanky = ?");
// Vykonání dotazu
$vysledek = $zmena_rec2->execute(array(
  $rec2, 
  $clanek,
  ));
  header("location:page.php?page=recenze.php");
?>