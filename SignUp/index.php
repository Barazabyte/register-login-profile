<?php
session_start();
// include("includes/classLoader_inc.php");
include_once "Classes/SignupView_class.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sign Up</title>
   <link rel="stylesheet" href="css/styles.css">
</head>
<body>
   <div class="container">
      <form action="includes/signup_inc.php" method="post">
         <div class="links">
            <h2>SIGN UP</h2>
            <a href="index2.php">login</a>
         </div>
         <?php
            $errors = new SignupView();
            $errors->formErrors()
         ?>
         <input type="text" name="username" placeholder="Username">
         <input type="text" name="email" placeholder="Email">
         <input type="password" name="pwd" placeholder="password">
         <input type="password" name="pwdRepeat" placeholder="Repeat password">

         <button>Sign Up</button>
      </form>
   </div>
</body>
</html>
