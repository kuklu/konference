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
    echo "Nejste p�ihl�en - m��ete se p�ihl�sit <a href='login3.php'>zde</a>";
     // header("location:login3.php");  
 }  





?>

<!DOCTYPE html>

<html lang="cs-cz">
       <head>
               <meta charset="UTF-8" />
               <title>Geomatika v �l�nc�ch</title>
               <link rel="stylesheet" href="style2.css" type="text/css" />
       </head>

       <body>
               <header>
                       <div id="logo">&nbsp;</div>
                       <h1>Geomatika v �l�nc�ch</h1>
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
                               <h1>V�tejte!</h1>
                       </header>
                       <section>
                               <p>Jsme ��di, �e jste zav�tali na na�e webov� str�nky konference, jen� nese n�zev Geomatika v �l�nc�ch.</p>
                               <p>Geomatika v �l�nc�ch je nult� ro�n�k konference, kter� navazuje na n�kolikaletou tradici "Geomatika v projektech"</p>
                               <p>P�ihlaste se a vkl�dejte odborn� �l�nky, recenzujte, p�id�vejte koment�e nebo prost� bu�te jenom tich�m a neviditeln�m �ten��em bez registrace.</p>
                                 </br>
                                 </br>
                               <p>Web t�to konference vznikl jako semestr�ln� pr�ce z p�edm�tu KIV/WEB. </p>
                       </section>
                       <footer>&nbsp;</footer>
               </article>

               <footer>&copy; Nov�k corporation 2013, soubor pro devbook.cz</footer>
       </body>
</html>