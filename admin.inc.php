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


  <br/>
<table class="table table-bordered">
     <thead>
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>&nbsp;Jm&eacute;no</th>
        <th>Př&iacute;jmen&iacute;</th>
        <th>Pr&aacute;va</th>
       <!--  <th>Sch&aacute;len</th>   -->
        <th>Změnit</th>
      </tr>
     </thead>

    <tbody>

<?php
include "db.php";

$dotaz = $connect->prepare("SELECT * FROM users");
$dotaz->execute();
$uzivatele = $dotaz->fetchAll();

foreach ($uzivatele as $uzivatel) {
    $tlacitko= "<a href=zmena.php?prava=4&kdo=".$uzivatel['ID_user'].">Admin</a>"." | "."<a href=zmena.php?prava=3&kdo=".$uzivatel['ID_user'].">Recenzent</a>";
    echo "
   
<tr>
<td>".$uzivatel['ID_user']. "</td>
<td>".$uzivatel['email']. "</td>
<td>".$uzivatel['jmeno']."</td>
<td>". $uzivatel['prijmeni']."</td>
<td>". $uzivatel['prava']."</td>

<td>". $tlacitko."</td>

</tr> ";
    
  
}
?>
</tbody> 
</table>




</html>
