<?php



session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../CSS.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3> User <span> profile</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>you can update your profile <span> click here</span></p>
      <a href="login.php" class="btn">login</a>
      <a href="register.php" class="btn">register</a>
      <a  class="btn">logout   </a>

  
     
   </div>

</div>

</body>
</html>