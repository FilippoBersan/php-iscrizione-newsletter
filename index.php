<?php


$error = null;


if (!empty($_POST['email'])){

 
  $email = $_POST['email'];

  if (str_contains($email , '.') && str_contains($email, '@')){
   $error = false;
    echo 'ok ';

   
  }
   else {
      $error = true;
      echo ' la mail non è valida';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Iscrizione Newsletter</title>
   <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

  <div class="container text-center py-4">
    <h1>PHP Iscrizione newsletter</h1>
  </div>



  <div class="container">
    <form action="index.php" method="POST">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email"  placeholder="Inserisci email" name="email">
    <small  class="form-text text-muted">La mail dovrà contenere un punto e una chiocciola.</small>
  </div>
  

<!-- 
<div class="alert alert-danger" role="alert">
Error Email
</div> -->




  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
  
</body>
</html>
