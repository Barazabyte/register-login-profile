<?php
   declare(strict_types = 1);

   class SignupModel extends Dbh {

      protected function isUserAvailable(string $username) {
         $qry = "SELECT username FROM users WHERE username = ?";
         $stmt = $this->connect()->prepare($qry);
         $stmt->execute([$username]);
         $result = $stmt->fetch(PDO::FETCH_ASSOC);

         if($result)
            return true;
         else
            return false;
      }

      protected function isEmailAvailable(string $email) {
         $qry = "SELECT email FROM users WHERE email = ?";
         $stmt = $this->connect()->prepare($qry);
         $stmt->execute([$email]);
         $result = $stmt->fetch(PDO::FETCH_ASSOC);

         if($result)
            return true;
         else
            return false;
      }

      protected function writeUser(string $username, string $email, string $pwdRepeat) {
         $qry = "INSERT INTO users(username, email, pswd) VALUES (?, ?, ?)";
         $stmt = $this->connect()->prepare($qry);

        // Hashing Password
         $option = ["cost" => 12];
         $hashedPwd = password_hash($pwdRepeat, PASSWORD_BCRYPT, $option); 

         $stmt->execute([$username, $email, $hashedPwd]);

         return true;         
      }
      
   }
