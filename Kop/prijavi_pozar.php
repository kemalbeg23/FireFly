<?php

require_once('config2.php');

if(isset($_POST['submit'])){

   $ulica =  $_POST['ulica'];
   $grad = $_POST['grad'];
   $broj =  $_POST['broj'];
   $email =  $_POST['email'];
   $opis = $_POST['opis'];
   
   $sql = " INSERT INTO pozar_form (ulica  , grad , broj , email , opis) VALUES (?,?,?,?,?)";
   $stmtinsert=$db->prepare($sql);
   $result = $stmtinsert->execute([$ulica , $grad , $broj , $email , $opis]);
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>FireFly->Priavi požar</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
   <a href="view.php"><img src="FireFly.png" style="width: 25%;" height="25%"></a>
      <h3>Prijavi požar</h3>
      <input type="ulica" name="ulica" required placeholder="ulica">
      <input type="grad" name="grad" required placeholder="grad">
      <input type="broj" name="broj" required placeholder="broj telefona">
      <input type="email" name="email" required placeholder="email">
      <input type="opis" name="opis" required placeholder="opis">
      <input type="submit" name="submit" value="POŠALJI!" class="form-btn">
      <a href="view.php"> <input value="Vrati se nazad!" class="form-btn">
   </form>

</div>
</body>
</html>