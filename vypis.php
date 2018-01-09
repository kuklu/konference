<!DOCTYPE html>

<html lang="cs-cz">
       <head>
           <meta charset="UTF-8" />                   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style2.css" type="text/css" />
 
       </head>

 <table class="table table-bordered">
     <thead>    
   <tr>
     <th>ID</th>
     <th>Název</th>
     <th>Anotace</th>
     <th>URL</th>
     <th>Autor</th>
   </tr>
    </thead>

<tbody>

<?php
include "db.php";

echo "<p> <br/>Výpis všech schválených článků";

$dotaz_clanky = $connect->prepare("SELECT * FROM clanky WHERE schvaleno=1 ");
$dotaz_clanky->execute();
$clanek = $dotaz_clanky ->fetchAll();

foreach ($clanek as $clanky) {
  
    echo " 
<tr>
<td>".$clanky['ID_clanky']. "</td>
<td>".$clanky['nazev']. "</td>
<td>".$clanky['anotace']."</td>
<td><a href='".$clanky['URL']."'>PDF</a></td>
<td>".$clanky['vlozil']."</td>

</tr>  ";
}

?>

</tbody>
</table>
</html>
    
    
