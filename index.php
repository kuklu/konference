<?php
session_start();
$menu="menu.php";
if(isset($_SESSION["username"]))  
 {  
  include "log.inc.php";
   
  switch ($_SESSION["prava"]) {
case "4" : $menu="menu_4.php"; break;
case "1" : include "vloz.php"; break;
default : $menu="menu.php";
}  
   
   
   
 }  
 else  
 {  
    echo "Nejste pøihlášen - mùžete se pøihlásit <a href='login3.php'>zde</a>";
     // header("location:login3.php");  
 }  





?>

<!DOCTYPE html>

<html lang="cs-cz">
       <head>
               <meta charset="UTF-8" />
               <title>Geomatika v èláncích</title>
               <link rel="stylesheet" href="style2.css" type="text/css" />
       </head>

       <body>
               <header>
                       <div id="logo">&nbsp;</div>
                       <h1>Geomatika v èláncích</h1>
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
                               <h1>Vítejte!</h1>
                       </header>
                       <section>
                               <p>Jsme øádi, že jste zavítali na naše webové stránky konference, jenž nese název Geomatika v èláncích.</p>
                               <p>Geomatika v èláncích je nultý roèník konference, který navazuje na nìkolikaletou tradici "Geomatika v projektech"</p>
                               <p>Pøihlaste se a vkládejte odborné èlánky, recenzujte, pøidávejte komentáže nebo prostì buïte jenom tichým a neviditelným ètenáøem bez registrace.</p>
                                 </br>
                                 </br>
                               <p>Web této konference vznikl jako semestrální práce z pøedmìtu KIV/WEB. </p>
                       </section>
                       <footer>&nbsp;</footer>
               </article>

               <footer>&copy; Novák corporation 2013, soubor pro devbook.cz</footer>
       </body>
</html>