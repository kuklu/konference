<!DOCTYPE html>

<html lang="cs-cz">
       <head>
               <meta charset="UTF-8" />
               <title>Geomatika v článcích</title>
               <link rel="stylesheet" href="style2.css" type="text/css" />
       </head>

       <body>
               <header>
                       <div id="logo">&nbsp;</div>
                       <h1>Geomatika v článcích</h1>
               </header>

               <nav>
                       <ul>
                       <?php
                          include "$menu";     
                               ?>
                       </ul>
               </nav>

               <br clear="both" />

               <div id="article-top">&nbsp;</div>

              <article>
                       <header>
                               <h1>Přihlášení</h1>
                       </header>
                       <section>
                     <?php
session_start();
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
                       </section>
                       <footer>&nbsp;</footer>
               </article>

               <footer>&copy; Novák corporation 2013, soubor pro devbook.cz</footer>
       </body>
</html>



























