<?php
session_start();
include("classLoader_inc.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
     // Taking the Users Inputs from The Form
      $username = $_POST["username"];
      $email = $_POST["email"];
      $password = $_POST["pwd"];
      $pwdRepeat = $_POST["pwdRepeat"];

     // Instantiating a Control Class instance
      $sender = new SignupControl($username, $email, $password, $pwdRepeat);
      $sender->registerUser();
      // header("location: ../index2.php");
      

   } else {
      header("location: ../index.php");
   }
