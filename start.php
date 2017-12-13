<?php
session_start();
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
