<!DOCTYPE html>

<html lang="cs-cz">
       <head>
               <meta charset="UTF-8" />
               <link rel="stylesheet" href="style3.css" type="text/css" />
       </head>



<body>

 
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="sent" value=""/>
<input type="hidden" name="ID_user" value="<?php echo $_SESSION['ID_user']; ?>"/>



 <br/>
<strong>Název práce</strong> <br/> 
<textarea class="nazev" name="nazev"></textarea> <br/><br/>  
<strong>Anotace práce</strong> <br/>
<textarea class="anotace" name="anotace" ></textarea> <br/><br/>

<input type="file" name="file" size="50" />    



<br />
<br />
<input type="submit" value="Nahrát práci" />

</form>  

</body>
</html> 