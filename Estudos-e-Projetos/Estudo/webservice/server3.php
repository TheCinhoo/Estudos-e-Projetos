<?php
  include_once("lib/nusoap.php");

  $server = new nusoap_server;
  $server->configureWSDL('server', 'urn:server');
  $server->wsdl->schemaTargetNamespace = 'urn:server';

  //REGISTER

  $server->register("consulta",
    array("id"     => "xsd:int"),
    array("return" => "xsd:string")
  );

  $server->register("mensagem",
    array(),
    array("return" => "xsd:string")
  );

  $server->register("inserir",
    array("id"        => "xsd:int",
          "nome"      => "xsd:string",
          "sobrenome" => "xsd:string",
          "idade"     => "xsd:int"),
    array("return"    => "xsd:string")
  );

  //FUNÇÕES

  function connect(){
		$host  = "localhost";
		$user  = "teste";
		$pass  = "teste";
		$banco = "teste";
		$conn  = mysqli_connect($host, $user, $pass, $banco);
		if ($conn) {
			return $conn;
		}else{
			return die('Não foi possível conectar: ' . mysql_error());
		}
	}

	function mensagem(){
    $conn = connect();
    if ($conn) {
      return "---------------------------------------<br>Conectado com sucesso<br>---------------------------------------<br><br>";
    } else {
      return "Não conectado";
    }
	}

  function consulta($id){
    $conn = connect();
    $consulta = $conn->query("SELECT id, nome, sobrenome, idade FROM teste WHERE id = $id");

    while ($dados = $consulta->mysqli_fetch_array()) {
      $vai = 'ID: ' . $dados['id'] . '';
    }

    $conn->close();

    return $vai;
  }

  function inserir($id, $nome, $sobrenome, $idade){
    $conn = connect();
    $sql = "INSERT INTO teste (id, nome, sobrenome, idade) values($id, $nome, $sobrenome, $idade)";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt) {
      return "Inserido com sucesso.";
    } else {
      return "Falha ao inserir";
    }

    $conn->close();


  }


  if(!isset($HTTP_RAW_POST_DATA)){
    $HTTP_RAW_POST_DATA = file_get_contents('php://input');
  }

  $server->service($HTTP_RAW_POST_DATA);

?>
