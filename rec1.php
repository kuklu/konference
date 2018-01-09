<?php
include "db.php";
$dotaz_rec1 = $connect->prepare("SELECT recenzent1 FROM clanky WHERE ID_clanky = ?");
$dotaz_rec1->execute(array($clanky['ID_clanky']));
$rec1 = $dotaz_rec1->fetch();

echo $rec1["recenzent1"]."<br>";

?>