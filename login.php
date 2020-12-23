<?php
    session_start();
    if(isset($_SESSION["loggedin"])&& $_SESSION["loggedin"]==true){
      header("location:index.php");
      exit;
    }
    require_once "config.php";

    $username=$pass="";
    if(isset($_POST["username"])){
      $username=$_POST["username"];
    }
    if(isset($_POST["password"])){
      $pass=$_POST["password"];
    }
    $hash=password_hash($pass,PASSWORD_DEFAULT);


    if(!empty($username)&&(!empty($pass))){
      $sql="SELECT `name`,`surname`,`loginname`,`password`,`role` from `users` WHERE loginname=?";
      if($stmt=mysqli_prepare($con,$sql)){
        mysqli_stmt_bind_param($stmt,"s",$par_username);
        $par_username=$username;
        if(mysqli_stmt_execute($stmt)){
          mysqli_stmt_store_result($stmt);
          if(mysqli_stmt_num_rows($stmt)==1){
            mysqli_stmt_bind_result($stmt,$name,$password,$usname,$password,$role);
            if(mysqli_stmt_fetch($stmt)){
              if(password_verify($password,$hash)){
                session_start();
                $_SESSION["loggedin"]=true;
                $_SESSION["username"]=$username;
                $_SESSION["role"]=$role;
                header("location:index.php");
              }else{
                echo "The password you entered was not valid";
              }
            }
          } else{
            echo "The username was not found";
          }
        } else{
          echo "Something wrong i hold my head";
        }
        mysqli_stmt_close($stmt);
      }
    }
    mysqli_close($con);
?>


<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css\pagestyle.css" />
    <title>Είσοδος</title>
  </head>

  <body>
    <div class="login-page">
    <form method="post">
        <label for="username">Login</label>
        <input type="text" id="username_field" name="username" placeholder="Όνομα χρήστη" required></br></br>
        <label for="password">Password</label>
        <input type="password" id="password_field" name="password" placeholder="Κωδικός πρόσβασης" required></br></br>
        <form action="index.html">
        <button type="submit">Είσοδος</button>
        </form>
    </form>
    </div>
  </body>
</html>
