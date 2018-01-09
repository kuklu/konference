<?php

ob_start();               // cachujeme vystup
  if(isset($_POST['sent'])){      // pokud byl odeslan formular pokracuj timto
$nazev=$_POST['nazev'];
$anotace=$_POST['anotace'];
$IDu=$_POST['ID_user'];
include "db.php";




 $targetfolder =  "upload/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $ok= 1;

$file_type=$_FILES['file']['type'];

if ($file_type=="application/pdf") {

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 //echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
//echo $targetfolder;
 
 $vloz = $connect->prepare("INSERT into clanky (nazev, anotace, URL, vlozil, recenzent1, recenzent2, recenzent3, schvaleno) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
// Vykonání dotazu
$vysledek = $vloz->execute(array(
  $nazev, 
  $anotace,
  $targetfolder,
  $IDu,
  0,
  0,
  0,
  0
  
));
 
 
echo "Soubor byl úspěšně nahrán"; 
 
 }

 else {

 echo "Problem uploading file";

 }

}

else {

 echo "Nahrávat je možné pouze PDF.<br>";
 

}
}
?>