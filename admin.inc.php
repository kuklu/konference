<?php
include "db.php";

$dotaz = $connect->prepare("SELECT * FROM users");
$dotaz->execute();
$uzivatele = $dotaz->fetchAll();

foreach ($uzivatele as $uzivatel) {
    $tlacitko= "<a href=zmena.php?prava=4&kdo=".$uzivatel['ID_user'].">Admin</a>"." | "."<a href=zmena.php?prava=3&kdo=".$uzivatel['ID_user'].">Recenzent</a>";
    echo "
   
<table style='width: 500px;' border='1'>
<tbody>
<tr>
<td>ID</td>
<td>email</td>
<td>&nbsp;Jm&eacute;no</td>
<td>Př&iacute;jmen&iacute;</td>
<td>Pr&aacute;va</td>
<td>Sch&aacute;len</td>
<td>Změnit</td>
</tr>
<tr>
<td>". $uzivatel['ID_user']. "</td>
<td>". $uzivatel['email']. "</td>
<td>". $uzivatel['jmeno']."</td>
<td>". $uzivatel['prijmeni']."</td>
<td>". $uzivatel['prava']."</td>
<td>". $uzivatel['schvalen']."</td>
<td>". $tlacitko."</td>
</tr>
</tbody>
</table>";
    
     // echo $uzivatel["ID_user"] . " " . $uzivatel["prijmeni"];
}
?>