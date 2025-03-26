<?php 
   class LoginControl extends LoginModel {
      private $username;
      private $password;

      public function __construct(string $username, string $password) {
         $this->username = $username;
         $this->password = $password;
      }

      private function isUserNameInvalid() {
         if($this->isUserUnvailable($this->username))
            return true;
         else 
            return false;
      }

      private function isPasswordInvalid() {
         if($this->isPwdIncorrect($this->username, $this->password))
            return true;
         else 
            return false;
      }

      public function loginUser() {
         if($this->isUserNameInvalid()) {
            header("location: ../index2.php?error=unavailable");
            exit();
         }
         if($this->isPasswordInvalid()) {
            header("location: ../index2.php?error=unavailable");
            exit();
         }

         $userId = $this->getUserId($this->username, $this->password);
         header("location: ../profile.php?uid=" . $userId);

      }
   }
