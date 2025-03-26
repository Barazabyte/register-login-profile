<?php
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      if(isset($_POST["logOut"])) {
         session_destroy();
         header("location: ../index2.php");
      }
   } else {
      header("../profile.php");
   }
