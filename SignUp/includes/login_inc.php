<?php
require "session_inc.php";
include("classLoader_inc.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST["username"];
      $password = $_POST["password"];

      $sender = new LoginControl($username, $password);
      $sender->loginUser();
   } else {
      header("location: ../index2.php");
   }
