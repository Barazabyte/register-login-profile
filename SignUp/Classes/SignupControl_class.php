<?php
   declare(strict_types = 1);
   class SignupControl extends SignupModel {
      private $username;
      private $email;
      private $password;
      private $pwdRepeat;

      public function __construct(string $username, string $email, string $password, string $pwdRepeat) {
         $this->username = $username;
         $this->email = $email;
         $this->password = $password;
         $this->pwdRepeat = $pwdRepeat;
      }

      private function isInputEmpty() {
         if(empty($this->username) || empty($this->email) || empty($this->password) || empty($this->pwdRepeat))
            return true;
         else
            return false;
      }
 
      private function isUserNameTaken() {
         if($this->isUserAvailable($this->username))
            return true;
         else 
            return false;
      }

      private function isEmailTaken() {
         if($this->isEmailAvailable($this->email))
            return true;
         else 
            return false;
      }

      private function isEmailInvalid() {
         if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
            return true;
         else 
            return false;      
      }

      private function isPwdNotTrue() {
         if($this->password !== $this->pwdRepeat)
            return true;
         else 
            return false;      
      }

   // Registering a User into a Database
      public function registerUser() {
         if($this->isInputEmpty()) {
            header("location: ../index.php?error=emptyInput");
            exit();
         }
         if($this->isUserNameTaken()) {
            header("location: ../index.php?error=usernameTaken");
            exit();
         }
         if($this->isEmailInvalid()) {
            header("location: ../index.php?error=invalidEmail");
            exit();
         }
         if($this->isEmailTaken()) {
            header("location: ../index.php?error=emailTaken");
            exit();
         }
         if($this->isPwdNotTrue()) {
            header("location: ../index.php?error=passwordNotMatch");
            exit();
         }

         if($this->writeUser($this->username, $this->email, $this->pwdRepeat))
            header("location: ../index2.php");
            session_destroy();
         exit();
      }


   }
