<?php

//$pass = $_GET['pass'];


function generaPassword()
{
  $newPassRandom = rand(1, 100);
  echo $newPassRandom;
};


var_dump(generaPassword());

?>







<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <div class="container-fc">
    <form action="index.php" method="GET">
      <div class="mb-3">
        <label for="pass" class="form-label">Password</label>
        <input type="password" class="form-control" id="pass">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>