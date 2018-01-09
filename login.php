<?php  
 
 include "db.php"; 
// $message=$_GET['message'];
 
  
    //připojení do db
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
      //test vyplněnosti políček
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>Všechny položky jsou povinné!</label><br/>';  
               
           }  
           else  
           {  
      // kontrola hesla     
                $query = "SELECT * FROM users WHERE email = :username AND heslo = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     md5($_POST["password"]) 
                     )  
                );  
                $count = $statement->rowCount(); 
                
                if($count > 0)  
                {  
       //načtení údajů do SESSION             
                    $datas = $statement->fetchAll();
                     $_SESSION["username"] = $_POST["username"];
               
                    foreach ($datas as $uzivatel) {
                    echo $uzivatel["jmeno"] . " " . $uzivatel["prijmeni"] . " " . $uzivatel["funkce"];
                    $_SESSION['prava'] = $uzivatel["prava"];
                    $_SESSION['jmeno'] = $uzivatel["jmeno"]; 
                    $_SESSION['prijmeni'] = $uzivatel["prijmeni"]; 
                    $_SESSION['funkce'] = $uzivatel["funkce"]; 
                    $_SESSION['ID_user'] = $uzivatel["ID_user"];  
                  
}
           //návrat na index         
                     header("location:index.php");  
                }  
                else  
                {  
                     $message = '<label>špatné jméno nebo heslo </label>';  
                }  
           }  
      }  
 //}  
 //catch(PDOException $error)  
// {  
 //     $message = $error->getMessage();  
// }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head> 
      	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="cs" /> 
  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
            <link rel="stylesheet" href="style3.css" type="text/css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
            
          
                <?php  
                
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>    
                <h1>Přihlášení</h1>
                <form method="post">  
                     <label>Email:</label>  
                     <input type="text" name="username" class="form-control" size=25/>  
                     <br /> <br /> 
                     <label>Heslo:</label>  
                     <input type="password" name="password" class="form-control" size=25/>  
                     <br /> 
                     <br /> 
                     <input type="submit" name="login" class="btn btn-info" value="Login" />  
                </form>  
            
           <br />  
      </body>  
 </html>  