<?php
// Pøipojovací údaje do lokální databáze

 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "konference";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }





?>