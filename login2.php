<?php  
 session_start();  

require "db.php";
   if(isset($_POST["login"]))  
      {  
           if(empty($_POST["email"]) || empty($_POST["heslo"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM users WHERE email = :email AND heslo = :heslo";  
                $statement = $dsn->prepare($query);  
                $statement->execute(  
                     array(  
                          'email'     =>     $_POST["email"],  
                          'heslo'     =>     $_POST["heslo"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["email"] = $_POST["email"];  
                     header("location:login_success.php");  
                }  
                else  
                {  
                     $message = '<label>Špatné jméno nebo heslo</label>';  
                }  
           }  
      }  
  
   
 {  
     // $message = $error->getmessage();  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Pøihlášení</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
                <h3 align="">pøihlášení</h3><br />  
                <form method="post">  
                     <label>email</label>  
                     <input type="text" name="email" class="form-control" />  
                     <br />  
                     <label>Heslo</label>  
                     <input type="password" name="heslo" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" class="btn btn-info" value="Login" />  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  
