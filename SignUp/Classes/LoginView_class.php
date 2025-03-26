<?php
   class LoginView extends LoginModel {

      public function printErrors() {
         if(isset($_GET["error"])) {
            if($_GET["error"] == "unavailable") ?>
               <p class="error_message">Invalid UserName or Password</p> <?php
         }
      } 
   }
