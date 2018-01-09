<?php
if(isset($_SESSION["username"]))  
 {  
  echo '<h3>Přihlášení úspěšné, Vítejte - '.$_SESSION["jmeno"]. " " .$_SESSION["prijmeni"]. " v právech " .$_SESSION["ID_user"].'</h3>';  
      echo '<br /><br /><a href="logout.php">Logout</a>'; 
   
  
}  
   
   
   

 else  
 {  
    echo "Nejste přihlášen - můžete se přihlásit <a href='login3.php'>zde</a>";
     // header("location:login3.php");  
 }  





?>

















