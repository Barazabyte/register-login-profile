<?php
   class ProfileControl extends ProfileModel {
      
      public function takeUserData($userId) {
         $details = $this->grabUserData($userId);
         return $details;
      }
   }
