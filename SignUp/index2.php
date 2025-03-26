<?php
require "includes/session_inc.php";
include("includes/classLoader_inc.php");
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
         <form action="includes/login_inc.php" method="post">
            <div class="links">
               <h2>LOGIN</h2>
               <a href="index.php">Sign up</a>
            </div>
            <?php
               $error = new LoginView();
               $error->printErrors();
            ?>
               <input type="text" name="username" placeholder="Username">
               <input type="password" name="password" placeholder="Password">
   
            <button>Login</button>
         </form>
      </div>
   </body>
   </html>
   
   