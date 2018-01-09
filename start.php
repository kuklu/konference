<?php
session_start();
include "db.php";
if(isset($_SESSION["username"]))  
 {  
  include "log.inc.php";
   
  switch ($_SESSION["prava"]) {
case "4" : include "admin.inc.php"; break;
case "1" : include "vloz.php"; break;
default : echo "Nakašlat";
}  
   
   
   
 }  
 else  
 {  
    echo "Nejste přihlášen - můžete se přihlásit <a href='login3.php'>zde</a>";
     // header("location:login3.php");  
 }  






?>

<h1>Vítejte na žluťoučké konferenci</h1>
Dosud schválené příspěvky<br /><br />

<?php
$dotaz_clanky = $connect->prepare("SELECT * FROM clanky WHERE schvaleno=1");
$dotaz_clanky->execute();
$clanek = $dotaz_clanky ->fetchAll();

foreach ($clanek as $clanky) {
    //$tlacitko= "<a href=zmena.php?prava=4&kdo=".$uzivatel['ID_user'].">Admin</a>"." | "."<a href=zmena.php?prava=3&kdo=".$uzivatel['ID_user'].">Recenzent</a>";
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