<?php
session_start();
$menu="menu.php";
$nadpis="";
$page=$_GET['page'];
if(isset($_SESSION["username"]))  
 {  
  //include "log.inc.php";
   
  switch ($_SESSION["prava"]) {
case "4" : $menu="menu_4.php"; break;
case "1" : $menu="menu_1.php"; break;
case "3" : $menu="menu_3.php"; break;
default : $menu="menu.php";
}  
   
  switch ($page) {
case "admin.inc.php" : $nadpis="Administrace uživatelů"; break;
case "clanky.php": $nadpis="Přehled článků"; break;
case "vypis_ano.php" : $nadpis="Přehled článků"; break;
case "login.php" : $nadpis="Přihlášení"; break;
case "novyclanek.php" : $nadpis="Vložit článek"; break;
case "mojeclanky.php" : $nadpis="Moje články"; break;
case "hodnoceni.php" : $nadpis="Výpis přidělených článků k recenzi"; break;
case "recenze.php": $nadpis="Administrace článků"; break;
default : $nadpis="Vítejte";
}  
   
   
 }  
 else  
 {  
    //echo "Nejste přihlášen - můžete se přihlásit <a href='login.php'>zde</a>";
     // header("location:login3.php");  
 }  





?>

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
                       <h1>Geomatika v&nbsp;článcích</h1>
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
                               <h1> <?php
                          echo $nadpis;     
                               ?></h1>
                       </header>
                       <section>
                       <?php
                          include "$page";     
                               ?>
                               
                       </section>
                       <footer>&nbsp;</footer>
               </article>
               
        
               
               
               <footer>&copy; Jeřábková - ZČU</footer>
       </body>
</html>










