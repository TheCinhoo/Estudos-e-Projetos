<?php
  $n1         = $_POST['n1'];
  $n2         = $_POST['n2'];
  $massa      = $_POST['massa'];
  $altura     = $_POST['altura'];
  $doar       = $_POST['doar'];

  function notaFinal($n1, $n2){
    $media = ($n1+$n2)/2;
    if ($media>7) {
      $r = "Sua media foi de $media e voce esta APROVADO";
    } elseif ($media< 7 && $media > 5) {
      $r = "Sua media foi de $media e voce esta de RECUPERACAO";
    } else {
      $r = "Sua media foi de $media e voce esta REPROVADO";
    }
    return $r;
  }

  function imc($massa, $altura){
    $imc = $massa / ($altura * $altura);
    $imc = number_format($imc, 2, ',','');
    if ($imc < 17) {
      $res = "Seu IMC e de $imc e voce esta muito abaixo do peso";
    } elseif ($imc >= 17 && $imc < 18.5) {
      $res = "Seu IMC e de $imc e voce esta abaixo do peso";
    } elseif ($imc > 18.5 && $imc < 25) {
      $res = "Seu IMC e de $imc e voce esta no seu peso ideal";
    } elseif ($imc >= 25 && $imc < 30) {
      $res = "Seu IMC e de $imc e voce esta com sobrepeso";
    } elseif ($imc >= 30 && $imc < 35) {
      $res = "Seu IMC e de $imc e voce esta com obesidade";
    } elseif ($imc >= 35 && $imc < 40){
      $res = "Seu IMC e de $imc e voce esta com obesidade severa";
    } else {
      $res = "Seu IMC e de $imc e voce esta com obesidade morbida e vai morrer";
    }
    return $res;
  }

  function doar($doar){
    switch ($doar) {
      case 1:
        $val = 10;
        break;
      case 2:
        $val = 25;
        break;
      case 3:
        $val = 50;
        break;
      case 4:
        $val = 100;
        break;
      case 5:
        $val = 0;
        break;
      default:
        $val = "Esta opcao nao e valida";
    }
    return "Voce acaba de doar R$: $val";
  }

  function aproveitamento($n1, $n2){
    $media = ($n1+$n2)/2;
    if ($media >= 9 ) {
      $r = "MEDIA: $media <BR>APROVEITAMENTO A";
    } elseif ($media >= 8 && $media < 9) {
      $r = "MEDIA: $media <BR>APROVEITAMENTO B";
    } elseif ($media >= 7 && $media < 8) {
      $r = "MEDIA: $media <BR>APROVEITAMENTO C";
    } elseif ($media >= 6 && $media < 7) {
      $r = "MEDIA: $media <BR>APROVEITAMENTO E";
    } else {
      $r = "MEDIA: $media <BR>APROVEITAMENTO F";
    }
    return $r;
  }

  $nota = notaFinal($n1, $n2);
  echo "$nota <br><br>";

  $imc = imc($massa, $altura);
  echo "$imc <br><br>";

  $val = doar($doar);
  echo "$val <br><br>";

  $aproveitamento = aproveitamento($n1, $n2);
  echo "$aproveitamento <br><br>";