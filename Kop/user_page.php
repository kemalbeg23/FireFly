<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
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
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1> Dobro došao <span><?php echo $_SESSION ['user_name'] ?></span> u tim FireFly-a!</h1>
      <p>Dobro došli u FireFly</p>
      <a href="login_form.php" class="btn">LOG IN</a>
      <a href="register.php" class="btn">Registriraj se</a>
      <a href="logout.php" class="btn">LOG OUT</a>
      <a href="zastita1.php" class="btn">NASTAVI</a>
   </div>

</div>

</body>
</html>