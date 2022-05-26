<?php

  $dinheiro = $_POST['dinheiro'];
  $numero   = $_POST['numero'];
  $peso     = $_POST['peso'];
  $altura   = $_POST['altura'];
  $nasc     = $_POST['nasc'];
  $n1       = $_POST['n1'];
  $n2       = $_POST['n2'];

  function viagem($dinheiro){
    if ($dinheiro >= 10000) {
      echo "Vamos viajar.";
    } else {
      echo "Melhor arrumar dinheiro antes.";
    }
  }

  function imparPar($numero){
    if ($numero%2 != 0) {
      $resposta = "O $numero e impar";
    }else {
      $resposta = "o $numero e par";
    }
    return $resposta;
  }

  function imc($altura, $peso){
      $imc = $peso/($altura * $altura);
      $imc = number_format($imc, 2, ',', '' );
      if ($imc > 18.5 && $imc < 25) {
        $msg = "Seu IMC e de $imc e esta bom.";
      } elseif ($imc > 25) {
        $msg = "Seu IMC e de $imc e voce esta acima do peso";
      } else {
        $msg = "Seu IMC e de $imc e voce esta abaixo do peso";
      }
      return $msg;
  }

  function carteira($nasc){
    $atual = date('Y');
    $idade = $atual - $nasc;
    if ($idade > 17) {
      $resp = "Voce tem $idade e esta apto a tirar a carteira";
    } else {
      $resp = "Voce ainda não pode tirar a carteira.";
    }
    return $resp;
  }

  function mediaFinal($n1, $n2){
    $media = ($n1 + $n2) / 2;
    if ($media >= 7) {
      $r = "Sua media e de $media e voce esta aprovado";
    } else {
      $r = "Sua media e de $media e voce foi reprovado";
    }
    return $r;
  }

  $vamos = viagem($dinheiro);
  echo $vamos;

  echo "<br><br><br>";

  $num = imparPar($numero);
  echo $num;

  echo "<br><br><br>";

  $indice = imc($altura, $peso);
  echo $indice;

  echo "<br><br><br>";
  $carteira = carteira($nasc);
  echo $carteira;

  echo "<br><br><br>";
  $notafinal = mediaFinal($n1, $n2);
  echo $notafinal;
 ?>
