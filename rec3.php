<?php
include "db.php";
$dotaz_rec = $connect->prepare("SELECT * FROM clanky WHERE ID_clanky = ?");
$dotaz_rec->execute(array($clanky['ID_clanky']));
$rec1 = $dotaz_rec->fetch();

echo $rec1["recenzent3"]."<br>";

?>