<?php
  echo "<html><head>	<title>CLIENTE</title>  </head>";

  require_once('lib/nusoap.php');
  $client = new soapclient('https://localhost/Estudo/webservice/servidor.php');

  $dados     = "Teste";
  $sobrenome = "Sobrenome";

  $result =  $client->call('hello', array('username' => $dados, 'sobrenome'=> $sobrenome));

  echo "<br/><h3>WEBSERVICE - SIGAT</h3><br>";

  // checando faults possíveis falhas
  if ($client->fault) {
    echo '<p><b>Fault: ';
    print_r($result);
    echo '</b></p>';
  } else {
    // Checando erros
    $err = $client->getError();
    if ($err) {
      echo '<p><b>Error: ' .$err. '</b></p>';
    } else {
      print_r($result);
      print_r($teste);
    }
  }

//Debugando
/*
  echo '<h2>Request</h2>';
  echo '<pre>' .htmlspecialchars($client->request, ENT_QUOTES). '</pre>';
  echo '<h2>Response</h2>';
  echo '<pre>' .htmlspecialchars($client->response, ENT_QUOTES). '</pre>';
  echo '<h2>Debug</h2>';
  echo '<pre>' .htmlspecialchars($client->getDebug(), ENT_QUOTES). '</pre>';
*/
?>
