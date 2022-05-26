<?php
  echo "<html><head>	<title>CLIENTE</title>  </head>";
  echo "<H3>BUSCAR USUARIOS</H3>";
  require_once ("lib/nusoap.php");
  $client = new nusoap_client("http://localhost/Estudo/webservice/server3.php?wsdl");

  $id         = $_POST['id'];
  $nome       = $_POST['nome'];
  $sobrenome  = $_POST['sobrenome'];
  $idade      = $_POST['idade '];


  $mensagem = $client->call('mensagem', array('id'        => $id,
                                              'nome'      => $nome,
                                              'sobrenome' => $sobrenome,
                                              'idade'     => $idade));

  $consulta = $client->call('consulta', array("1"));

  $insere   = $client->call('inserir') ;

  print_r($mensagem);
  print_r($consulta);
  print_r($insere);
