<?php

//session_start();
//$_SESSION['passwordGenerata'] = $_GET['lunghezza'];

//header('Location: ./atterraggio.php');

// BUSINESS LOGIC
include 'function.php';

// 1. creare il form //[ok]
// 2. gestiamo il submit [ok]
// 3. prendiamo il valore inserito dall'utente // $_GET[]
// 4. creiamo la funzione generaPassowrd[ok]
// 4.1 creiamo una stringa vuota che conterrà la nostra password // $newPassord = '';[ok]
// 4.2 estraiamo una lettera casuale per quanto è la lunghezza scelta dell'autente [ok]
// 4.3 concateniamo questa nuova lettera casuale alla stringa che abbiamo creato al punto 4.1 // $newPassord .= randomCarattere;[ok]
// 4.4 restituiamo la nuova passowrd generata [ok]
// 5 se l'utente ha inviato il form, stampiamo la password [ok]

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
    <?php if (isset($_GET['lunghezza'])) { ?>
      <h1>La tua password generata casualmente di <?php echo $lunghezza ?> caratteri è:
        <strong><?php echo $password ?></strong>
      </h1>
    <?php } else { ?>
      <form action="index.php" method="GET">
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="number" class="form-control" id="exampleInputPassword1" name="lunghezza">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    <?php } ?>
  </div>
</body>

</html>