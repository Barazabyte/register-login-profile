<?php
   class ProfileView extends ProfileModel {

      private function grabUserId() {
         $uid = 0;
         if(isset($_GET["uid"]))
            $uid = $_GET["uid"];
            
            return $uid;
      }

      public function printUserDetails() {
         $userId = $this->grabUserId();
         $details = $this->grabUserData($userId);

         session_start();
         $_SESSION["details"] = $details;
         // $_SESSION["email"] = $details["email"];
      }
   }
