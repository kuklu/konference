



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
     <th>Recenzent1</th>
     <th>Recenzent2</th>
     <th>Recenzent3</th>
      <th>Schváleno</th>
   </tr>
    </thead>

<tbody>
<?php
include "db.php";

echo "<p> <br/> Výpis všech neschválených článků";

$dotaz_clanky = $connect->prepare("SELECT * FROM clanky WHERE schvaleno=0");
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
<td>".$clanky['recenzent1']."</td>
<td>".$clanky['recenzent2']."</td>
<td>".$clanky['recenzent3']."</td>
<td>".$clanky['schvaleno']."</td>

</tr>  ";
}

?>
</tbody>
</table>
</html>
    
    
