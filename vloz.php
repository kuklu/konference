<?php


echo $_SESSION['ID_user']."b"; ?>

<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="sent" value=""/>
<input type="text" name="ID_user" value="<?php


echo $_SESSION['ID_user']; ?>"/>


<input type="text" name="nazev" maxlength="50" class="required"/> <strong>N�zev pr�ce</strong> <br/>
<textarea name="anotace" cols="100" rows="10"></textarea> <strong>Anotace pr�ce</strong> <br/>
<input type="file" name="file" size="50" />


<br />

<input type="submit" value="Nahr�t pr�ci" />

</form>