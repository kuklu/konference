<?php
$nadpis="Výpis článků";
include "db.php";
echo "<p> Výpis mých článků ";
$kdo=$_SESSION['ID_user'];


$dotaz_clanky = $connect->prepare("SELECT * FROM clanky WHERE vlozil=$kdo");
$dotaz_clanky->execute();
$clanek = $dotaz_clanky ->fetchAll();

foreach ($clanek as $clanky) {
  
    echo "
   
<table style='width: 500px;' border='1'>
<tbody>
<tr>
<td>ID</td>
<td>nazev</td>
<td>anotace</td>
<td>URL</td>
<td>vlozil</td>
<td>recenzent1</td>
<td>recenzent2</td>
<td>recenzent3</td>
<td>Schvaleno</td>
</tr>
<tr>
<td>". $clanky['ID_clanky']. "</td>
<td>". $clanky['nazev']. "</td>
<td>". $clanky['anotace']."</td>
<td><a href='". $clanky['URL']."'>PDF</a></td>
<td>". $clanky['vlozil']."</td>
<td>". $clanky['recenzent1']."</td>
<td>". $clanky['recenzent2']."</td>
<td>". $clanky['recenzent3']."</td>
<td>". $clanky['schvaleno']."</td>

</tr>
</tbody>
</table>";
    
    
}

?>