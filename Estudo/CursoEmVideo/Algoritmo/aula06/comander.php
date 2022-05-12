<?php

  $atual       = date("Y");
  $nascimento  = $_POST['nascimento'];
  $real        = $_POST['real'];
  $fahrenheit  = $_POST['fahrenheit'];
  $total       = $_POST['total'];
  $pedido      = $_POST['pedido'];
  $vezes       = $_POST['vezes'];

  function idade($atual, $nascimento){
    $idade = $atual - $nascimento;
    return $idade;
  }

  function conversor($real){
    $dolar = 3.18;
    $valor = $real / $dolar;

    return  number_format($valor, 1, ',', '');
  }

  function temperatura($fahrenheit){
    $celsius = ($fahrenheit - 32) / 1.8;
    return number_format($celsius, 1, ',', '');
  }

  function imposto($total){
    $imposto = ($total * 60) / 100;
    $compras = $imposto + $total;
    return $compras;
  }

  function imprestimo($pedido, $vezes){
    $acrescimo      = $pedido * 0.2;
    $pagamento      = $pedido + $acrescimo;
    $parcela        = $pagamento / $vezes;



    return "Voce solicitou o imprestimo de R$" .$pedido. " que no total saira R$".$pagamento." dividido em " .$vezes. "x, que tera uma parcela de R$" .$parcela;
  }




  $idade = idade($atual, $nascimento);
  echo "Sua idade e: ".$idade. "<br>";
  echo "Estamos no ano de: ".$atual. "<br>";
  echo "Voce nasceu em: ".$nascimento. "<br>";

  $valor = conversor($real);

  echo "<br>";
  echo "Em dolar e: ".$valor. "<br>";

  $temperatura = temperatura($fahrenheit);

  echo "<br>";
  echo "Em celsius e: ".$temperatura. "<br>";

  $imposto = imposto($total);

  echo "<br>";
  echo "O preco total fica: ".$imposto. "<br>";

  $parcela = imprestimo($pedido, $vezes);

  echo "<br>";
  echo $parcela;