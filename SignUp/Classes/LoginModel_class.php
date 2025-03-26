<?php
declare(strict_types = 1);
   class LoginModel extends Dbh {

      protected function isUserUnvailable(string $username) {
         $qry = "SELECT username FROM users WHERE username = ?";
         $stmt = $this->connect()->prepare($qry);
         $stmt->execute([$username]);
         $result = $stmt->fetch(PDO::FETCH_ASSOC);

         if($result)
            return false;
         else
            return true;         
      }

      protected function isPwdIncorrect(string $username, string $password) {
         $qry = "SELECT pswd FROM users WHERE username = ?";
         $stmt = $this->connect()->prepare($qry);
         $stmt->execute([$username]);
         $result = $stmt->fetch(PDO::FETCH_ASSOC);
         $hash = $result["pswd"];

       // Password Decryption  
         if(!password_verify($password, $hash))
            return true;
         else  
            return false;
      } 

      protected function getUserId(string $username, string $password) {
         if(!$this->isUserUnvailable($username) && !$this->isPwdIncorrect($username, $password)) {

            $qry = "SELECT id FROM users WHERE username = ?";
            $stmt = $this->connect()->prepare($qry);
            $stmt->execute([$username]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result["id"];
         }
      }
   }
