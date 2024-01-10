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
    <form action="index.php" method="GET">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inserisci email">
    <small id="emailHelp" class="form-text text-muted">La mail dovrà contenere un punto e una chiocciola.</small>
  </div>
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
  
</body>
</html>