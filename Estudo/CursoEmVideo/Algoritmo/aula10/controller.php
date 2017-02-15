<?php

  $contador = $_POST['contador'];

  function crescente(){
    while ($a <= 10) {
      $msg .= "$a <br>";
      $a++;
    }
    return $msg;
  }

  function decrescente(){
    $a = 10;
    while ($a >= 0) {
      $msg .= "$a <br>";
      $a--;
    }
    return $msg;
  }

  function sair(){
    $msg = "SAINDO...........";
    return $msg;
  }

  switch ($contador) {
    case 1:
      $res = crescente();
      echo "---------------------<br>$res<br>---------------------";
      break;

    case 2:
      $res = decrescente();
      echo "---------------------<br>$res<br>---------------------";
      break;

    case 3:
      $res = sair();
      echo "---------------------<br>$res<br>---------------------";
      break;

    default:
      echo "Este numero nao e valido";
      break;
  }

 ?>
