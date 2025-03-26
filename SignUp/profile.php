<?php
// session_start();
require_once "includes/profile_inc.php";
require_once "includes/logOut_inc.php";
$details = $_SESSION["details"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile</title>
   <link rel="stylesheet" href="css/styles.css">
</head>
<body>
   <div class="container">
      <div class="profile-card">
         <h3>MY PROFILE</h3>
         <div class="item">
            <label for="uName" class="solid-labels">UserName: </label>
            <label for="uName-DB"><?php echo $details[0]["username"];  ?> </label>
         </div>
         <div class="item">
            <label for="email" class="solid-labels">email: </label>
            <label for="email-DB"><?php echo $details[0]["email"];  ?> </label>
         </div>

      </div>
   </div>
</body>
</html>
