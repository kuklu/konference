
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
<th>Struktura textu</th>
<th>Nové myšlenky</th>
<th>Zdroje</th>
<th>Hodnocení</th>
</tr>
     </thead>


<tbody>
<?php
if(isset($_SESSION['prihlasen']) or $_SESSION['prava']<2){
    echo "Nemáš právo to vidět";
    exit;
    }
//session_start();
$nadpis="Výpis článků";
include "db.php";
//echo "<p> Výpis mých článků ";
$kdo=$_SESSION['ID_user'];



echo "<br>";

$dotaz_clanky = $connect->prepare("SELECT * FROM clanky WHERE recenzent1=$kdo OR recenzent2=$kdo OR recenzent3=$kdo "  );
$dotaz_clanky->execute();
$clanek = $dotaz_clanky ->fetchAll();

foreach ($clanek as $clanky) {
    $ID_c= $clanky['ID_clanky'];
   
//<table style='width: 500px;' border='1'>     // dřív bylo v echu "tady"
    echo "
<form action='save_hodnoceni.php' method='post' name='hodnoceni'> 
<input type='hidden' name='sent' value=''/> 

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

</tr>";
}

?>

</tbody>
</table>
</html>
    
    

