<?php

if (isset($_GET['lunghezza'])) {
  $lunghezza = $_GET['lunghezza'];
  $password = generaPassowrd($lunghezza);
}


function generaPassowrd($lunghezza)
{
  $newPassword = '';
  $charset = 'abcdefghijklmnopqrstuvwxyz0123456789!?&%$<>^+-*/()[]{}@#_=';
  $lenght = strlen($charset);
  for ($i = 0; $i < $lunghezza; $i++) {
    $random = rand(1, $lenght - 1);
    $newPassword .= $charset[$random];
  }

  return str_shuffle($newPassword);
}
