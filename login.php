<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Log In</title>
  <style>
  body {
    background-color: #1E88E5;
  }
  </style>
</head>
<body>
  <div class="log-in-box">
    <div class="log-in-content">
      <p class="log-in-heading">Log In</p>
      <form name="login" method="post" action="login.php" class="log-in-form">
        <p class="log-in-text">Email:</p>
        <input type="email" class="emailID" name="emailID" id="emailID" placeholder="Email"><br><br>
        <p class="log-in-text">Password:</p>
        <input type="password" name="password" class="password" id="password" placeholder="Password"><br>
        <?php
        if(isset($_POST["btnLogin"]))
        {
          $userName=$_POST["emailID"];
          $password=$_POST["password"];
          $valid=false;

          $con = mysqli_connect("localhost","root","","recruitment-system");
          if(!$con)
          {
            die("Cannot connect to DB server");
          }

          $sql="SELECT * FROM `users` WHERE `email`='".$userName."' and `password`='".$password."'";

          $result = mysqli_query($con,$sql);


          if(mysqli_num_rows($result) >0)
          {
            $valid=true;
          }
          else
          {
            $valid=false;
          }

          if($valid)
          {
            $_SESSION["username"] =$userName;
            header('Location:index');
          }

          else
          {
            echo "Please enter the correct username and password";
          }
        }
        ?>
        <p>New User? <a href="register.php">Sign Up</a></p>
        <input class="filter-button" name="btnLogin" type="submit" value="Log In">
      </form>
    </div>
  </div>
</body>
</html>
