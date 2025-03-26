<?php
   class Dbh {
      private $dsn = "mysql:host=localhost;dbname=registeredusers";
      private $username = "Ninja";
      private $password = "ninja@scorpion2002";

      protected function connect() {
         try {
            $con = new PDO($this->dsn, $this->username, $this->password);
         } catch(PDOException $e) {
            echo " Failed to connect!" . $e->getMessage;
         } 
         return $con;
      }
   }
