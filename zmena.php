<?php
$prava=$_GET['prava'];
$ID=$_GET['kdo'];


include "db.php";

// P�ipraven� dotazu
$zmena_prav = $connect->prepare("UPDATE users SET prava = ? WHERE ID_user = ?");
// Vykon�n� dotazu
$vysledek = $zmena_prav->execute(array(
  $prava, 
  $ID,
  ));
  header("location:page.php?page=admin.inc.php");
?>