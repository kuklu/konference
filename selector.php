<?php

include "db.php";

$dotaz_rec = $connect->prepare("SELECT * FROM users WHERE prava='3'");
$dotaz_rec->execute();
$rec = $dotaz_rec ->fetchAll();
 echo "
 <form action='recupdate1.php' method='post' name='rec_update1'>
   <select name='recenzent1'>
   <option value='0'>Vyber recenzenta</option>";
   
foreach ($rec as $reci) {

    echo "<option value=". $reci['ID_user'].">". $reci['jmeno']."</option>"; 
     
     
     }
   echo "</select>
   <input type='hidden' name='ID_clanky' value='".$clanky['ID_clanky']."'/>
   <input type='submit' name='send' value='Nastav'/>
</form>"
   
   ;
   
     ?>
     
     