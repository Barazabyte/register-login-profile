<?php
   class ProfileModel extends Dbh {
      
      protected function grabUserData($userId) {
         $qry = "SELECT username, email FROM users WHERE id = ?";
         $stmt = $this->connect()->prepare($qry);
         $stmt->execute([$userId]);
         
         $details = $stmt->fetchAll(PDO::FETCH_ASSOC);

         return $details;
      }
   }
