<?php
   class SignupView {

      public function formErrors() {
         if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyInput") { ?>
               <p class="error_message">Fill All Fields</p> <?php
            }
            if($_GET["error"] == "usernameTaken") { ?>
               <p class="error_message">UserName Exists</p> <?php 
            }
            if($_GET["error"] == "invalidEmail") { ?>
               <p class="error_message">Invalid Email</p><?php
            }
            if($_GET["error"] == "emailTaken") { ?>
               <p class="error_message"> Email Exists</p> <?php
            }
            if($_GET["error"] == "passwordNotMatch") { ?>
               <p class="error_message">Password Don't Match</p> <?php
            }
         }
      }
   }
