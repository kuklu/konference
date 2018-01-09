<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="cs" />
	  <link rel='stylesheet' type='text/css' href='style3.css' />
  
 

  <title>registrace uživatele</title>
</head>     <!-- testovani vyplnenych polozek-->
<script type="text/javascript" src="src/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="src/jquery.validate.js"></script>
<script type="text/javascript" src="scr/additional-methods.js"></script>
<script type="text/javascript" src="scr/messages_cs.js"></script>

<style type="text/css">
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
</style>

 
  <script type="text/javascript">
  $(document).ready(function(){
    $("#registration").validate();
  });
  </script>
 


<body>
<h1>Registrace</h1>
<form action="reg_zpracuj.php" method="post" name="registration" id="registration">
  <input type="hidden" name="sent" value=""/>
  <label>Email - slouží jako uživatelské jméno:</label> <br/> <input type="text" name="email" value="" maxlength="64"/ class="email required">  <br/> <br/>
  <label>Heslo:</label> <br/><input type="password" name="heslo1" maxlength="32" class="required"/><br/>   <br/>
  <label>Heslo znovu:</label> <br/> <input type="password" name="heslo2" maxlength="32" class="required"/> <br/>  <br/>
  <label>Jméno:</label> <br/><input type="text" name="jmeno" maxlength="32" class="required"/>  <br/>    <br/>
  <label>Příjmení:</label>  <br/><input type="text" name="prijmeni" maxlength="32" class="required"/>  <br/> <br/>
  <input type="hidden" name="funkce" maxlength="32"/>  
  <input type="submit" name="send" value="Registruj"/>
</form>

</body>



<?php

?>