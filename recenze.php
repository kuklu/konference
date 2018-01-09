<?php
if(isset($_SESSION['prihlasen']) or $_SESSION['prava']<3){
    echo "Nemáš právo to vidět";
    exit;
    }
?>
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
      <th>Schválit</th>
      
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
$tlacitko= "<a href=schvalit.php?schvalit=1&clanek=".$clanky['ID_clanky'].">Schválit</a>"; 

    echo "
<tr>
<td>".$clanky['ID_clanky']. "</td>
<td>".$clanky['nazev']. "</td>
<td>".$clanky['anotace']."</td>
<td><a href='".$clanky['URL']."'>PDF</a></td>
<td>".$clanky['vlozil']."</td>
<td>";
include"rec1.php";
include"selector.php";
echo "</td>
<td>";
include"rec2.php";
include"selector2.php";
echo "</td>
<td>";
include"rec3.php";
include"selector3.php";
echo "</td>

<td>".$clanky['schvaleno']."</td>
<td>".$tlacitko."</td>
</tr>  ";
}

?>
</tbody>
</table>

 <table class="table table-bordered">
     <thead>    
    <tr>
     <th>ID</th>
     <th>Název</th>
     <th>Anotace</th>
     <th>URL</th>
     <th>Autor</th>
      <th>Schváleno</th>
   
      
   </tr>
    </thead>



<tbody>
<?php


echo "<p> <br/> Výpis všech schválených článků";

$dotaz_clanky = $connect->prepare("SELECT * FROM clanky WHERE schvaleno=1");
$dotaz_clanky->execute();
$clanek = $dotaz_clanky ->fetchAll();

foreach ($clanek as $clanky) {
$tlacitkoS= "<a href=smazat.php?clanek=".$clanky['ID_clanky'].">Smazat</a>"; 

    echo "
<tr>
<td>".$clanky['ID_clanky']. "</td>
<td>".$clanky['nazev']. "</td>
<td>".$clanky['anotace']."</td>
<td><a href='".$clanky['URL']."'>PDF</a></td>
<td>".$clanky['vlozil']."</td>

<td>".$clanky['schvaleno']."</td>

</tr>  ";
}

?>
</tbody>
</table>
</html>
    
    

