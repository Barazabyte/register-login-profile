<?php
   spl_autoload_register('autoload');

   function autoload($className) {
      $url = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
      
      if(strpos($url, 'includes') !== false) {
         $path = "../Classes/";
      } else {
         $path = "Classes/";
      }
      
      $extension = "_class.php";
      $fullPath = $path . $className . $extension;
      
      if(!file_exists($fullPath))
      return false;

   include_once $fullPath;

   }

