<?php
$schvalit=$_GET['schvalit'];
$clanek=$_GET['clanek'];


include "db.php";

// P�ipraven� dotazu
$schvaleni = $connect->prepare("UPDATE clanky SET schvaleno = ?, recenzent1=?, recenzent2=?,recenzent3=? WHERE ID_clanky = ?");
// Vykon�n� dotazu
$vysledek = $schvaleni->execute(array(
  $schvalit,
  0,
  0,
  0, 
  $clanek,
  ));
  header("location:page.php?page=recenze.php");
?>