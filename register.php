<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Register</title>
  <style>
    body {
      background-color: #1E88E5;
    }
  </style>
</head>

<body>
  <div class="register-in-box">
    <div class="register-in-content">
      <p class="register-in-heading">Register</p>
      <form method="post" action="register.php" class="register-in-form">
        <p class="register-in-text">Name:</p>
        <input type="text" class="name" name="name" id="name" placeholder="Name"><br><br>

        <p class="register-in-text">Email:</p>
        <input type="email" class="email" name="email" id="email" placeholder="Email"><br><br>

        <p class="register-in-text">User Name:</p>
        <input type="text" name="username" class="username" id="username" placeholder="username"><br><br>

        <p class="register-in-text">Password:</p>
        <input type="password" name="password" class="password" id="password" placeholder="Password"><br><br>

        <!-- <p class="register-in-text">Confirm Password:</p>
        <input type="password" name="password" class="password" id="password" placeholder="Confirm Password"><br><br> -->

        <p class="register-in-text">Phone:</p>
        <input type="text" name="contact" class="contact" id="contact" placeholder="Phone"><br><br>

        <p class="register-in-text">Address:</p>
        <input type="text" name="address" class="address" id="address" placeholder="Address"><br><br>

        <br>
        <?php
        if (isset($_POST["btnSubmit"])) {
          $name = $_POST["name"];
          $email = $_POST["email"];
          $email = $_POST["username"];
          $pass = $_POST["password"];
          $telno = $_POST["contact"];
          $addr = $_POST["address"];

          $con = mysqli_connect("localhost", "root", "", "recruitment-system");

          if (!$con) {
            die("Cannot upload the file, Please choose another file");
          }

          $sql = "INSERT INTO `customer` (`id`, `name`, `email`, `username`, `password`, `contact`, `address`) VALUES (NULL, '" . $name . "', '" . $email . "', '" . $username . "', '" . $password . "', '" . $contact . "', '" . $address . "');";

          if (mysqli_query($con, $sql)) {
            echo "File uploaded Successfully, Please Login";
            header('Location:login.php');
          } else {
            echo "Opps something is wrong, Please select the file again";
          }
        }

        ?>

        <input name="btnSubmit" class="filter-button" type="submit" value="Register">
      </form>
    </div>
  </div>
</body>
