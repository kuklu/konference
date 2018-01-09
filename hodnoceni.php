
<!DOCTYPE html>

<html lang="cs-cz">
       <head>
           <meta charset="UTF-8" />                   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style2.css" type="text/css" />
  
       </head>




<tbody>
<?php
//session_start();
$nadpis="Výpis článků";
include "db.php";
//echo "<p> Výpis mých článků ";
$kdo=$_SESSION['ID_user'];



echo "<p> Výpis přidělených článků k recenzi";

$dotaz_clanky = $connect->prepare("SELECT * FROM clanky WHERE recenzent1=$kdo OR recenzent2=$kdo OR recenzent3=$kdo "  );
$dotaz_clanky->execute();
$clanek = $dotaz_clanky ->fetchAll();

foreach ($clanek as $clanky) {
    $ID_c= $clanky['ID_clanky'];
    echo "
 <form action='save_hodnoceni.php' method='post' name='hodnoceni'> 
 <input type='hidden' name='sent' value=''/> 
<table style='width: 500px;' border='1'>
<tbody>
<tr>
<td>ID</td>
<td>nazev</td>
<td>anotace</td>
<td>URL</td>
<td>Struktura textu</td>
<td>Nové myšlenky</td>
<td>Zdroje</td>
<td>Hodnocení</td>
</tr>
<tr>
<td>". $clanky['ID_clanky']. "</td>
<td>". $clanky['nazev']. "</td>
<td>". $clanky['anotace']."</td>
<td><a href='". $clanky['URL']."'>PDF</a></td>
<td>   <select name='hodnoceni_struktura'>
 <option value='0'>Ohodnoť</option>
 <option value='1'>1</option>
 <option value='2'>2</option>
 <option value='3'>3</option>
 <option value='4'>4</option>
 <option value='0'>5</option>
</td>
<td>  <select name='hodnoceni_myslenky'>
 <option value='0'>Ohodnoť</option>
 <option value='1'>1</option>
 <option value='2'>2</option>
 <option value='3'>3</option>
 <option value='4'>4</option>
 <option value='0'>5</option></td>
<td>  <select name='hodnoceni_zdroje'>
 <option value='0'>Ohodnoť</option>
 <option value='1'>1</option>
 <option value='2'>2</option>
 <option value='3'>3</option>
 <option value='4'>4</option>
 <option value='0'>5</option></td>
 <input type='hidden' name='ID_clanku' value=".$ID_c.">
 <input type='hidden' name='ID_user_rec' value=".$kdo.">
 
<td>  <input type='submit' name='send' value='Ulož'/>
</form></td>

</tr>
</tbody>
</table>";
    
    
}

?>

