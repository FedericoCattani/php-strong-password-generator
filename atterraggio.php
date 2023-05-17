<?php
session_start();

// se la variabile è presente in sessione la salvo e la mostro in pagina
if (isset($_SESSION['passwordGenerata'])) {
  $pass = $_SESSION['passwordGenerata'];
} else {
  // se non è presente rendirizzo alla index
  header('Location: ./index.php');
}