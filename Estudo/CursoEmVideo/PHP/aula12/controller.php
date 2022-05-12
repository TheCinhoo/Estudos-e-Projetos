<?php
  header("Content-type: text/html; charset=utf-8"); 
  $valor = $_POST['val'];

  $c = $valor;
  $fat = 1;
  do {
    $fat = $fat * $c;
    $c--;
  } while ($c >= 1);
  echo "O Fatorial de $valor é: $fat";