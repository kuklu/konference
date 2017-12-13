 <?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
  
      echo '<h3>Přihlášení úspěšné, Vítejte - '.$_SESSION["jmeno"]. " " .$_SESSION["prijmeni"]. " v právech " .$_SESSION["funkce"].'</h3>';  
      echo '<br /><br /><a href="logout.php">Logout</a>';  
 }  
 else  
 {  
      header("location:login3.php");  
 }  
 ?>  

