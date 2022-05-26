<?php
	include_once('lib/nusoap.php');
	include_once('functions.php');

	$server = new soap_server();
	$server->configureWSDL("Vistoria","urn:Vistoria"); //Nome

 //REGISTER

	$server->register("buscarUsuarios",
		array(),
		array("return" => "xsd:string"),
		"urn:Vistoria",
		"urn:Vistoria#buscarUsuarios",
		"rpc",
		"encoded",
		"Buscar todos os Usuarios."
	);

	$server->register("buscarUsuario",
		array("id"     => , "xsd:string"),
		array("return" => , "xsd:string"),
		"urn:Vistoria",
		"urn:Vistoria#buscarUsuario",
		"rpc",
		"encoded",
		"Buscar Usuario");

	$server->register("inserirUsuario",
		array('id'     => 'xsd:string',
			'nome'       => 'xsd:string',
			'sobrenome'  => 'xsd:string',
			'idade'      => 'xsd:string'),
		array("return" => "xsd:string"),
			"urn:Vistoria",
			"urn:Vistoria#buscarUsuarios",
			"rpc",
			"encoded",
			"Buscar Usuario."
	);

	$server->register('hello',
		array('username' => 'xsd:integer'),  //parameter
		array('return'   => 'xsd:string'),    //output
		'urn:server',   										//namespace
		'urn:server#helloServer',  					//soapaction
		'rpc', 															// style
		'encoded', 													// use
		'Boas-Vindas'  											//description
	);

	$server->register('enviaDados', //primeiro paramentro - Nome da function
 		array(   //Segundo paramentro  - Inputs
			'reginJucesc' 						=> 'xsd:string',
			'cpfCnpj'     						=> 'xsd:string',
			'nomeFantasiaEmpresa' 		=> 'xsd:string',
			'fone' 										=> 'xsd:integer',
			'razaoSocial' 						=> 'xsd:string',
			'nomeContato'							=> 'xsd:string',
			'eMail'										=> 'xsd:string',
			'nome'										=> 'xsd:string',
			'foneProprietario'   		 	=> 'xsd:string',
			'cnpjCpf'									=> 'xsd:string',
			'eMailProprietario'   		=> 'xsd:string',
			'nomeEdificacao'      	  => 'xsd:string',
			'nomeFantasiaEdificacao'  => 'xsd:string',
			'numeroRE'								=> 'xsd:integer',
			'logradouro'							=> 'xsd:integer', //CHECKBOX
			'numero'									=> 'xsd:integer',
			'cidade'									=> 'xsd:integer', //CHECKBOX
			'nomeEndereco'						=> 'xsd:string',
			'bairro'									=> 'xsd:string',
			'cep'											=> 'xsd:string',
			'ocupacao'								=> 'xsd:integer', //CHECKBOX
			'situacao'								=> 'xsd:integer', //CHECKBOX
			'pavimentos'							=> 'xsd:integer', //CHECKBOX
			'tipoEscada'							=> 'xsd:integer', //CHECKBOX
			'numeroPessoas'						=> 'xsd:integer',
			'tipoContrucao'						=> 'xsd:integer', //CHECKBOX
			'numeroBlocos'						=> 'xsd:integer', //CHECKBOX
			'gas'											=> 'xsd:boolean', //RADIO
			'gasQuantidade'						=> 'xsd:integer',
			'liquidoInflamavel'				=> 'xsd:boolean', //RADIO
			'quantidadeLiquido'				=> 'xsd:integer',
			'explosivos'							=> 'xsd:boolean', //RADIO
			'microEmpreendedor'				=> 'xsd:boolean', //RADIO
			'quantidadeFuncionarios'	=> 'xsd:integer',
			'outroPredio'							=> 'xsd:boolean',	//RADIO
			'areaPredio'							=> 'xsd:integer',
			'areaEdificacao'					=> 'xsd:integer'),
		array(   //Terceiro parametro  - Outputs
			'return'=>'xsd:inter'),
			'urn:Vistoria.enviaDados',
			'urn:Vistoria.METODO',
			'rpc',
			'encoded',
			'Webservice CBMSC - Envia dados'
		);

	$server->register("bancoTeste");


	//FUNCTIONS

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

	function buscarUsuario($id){
		$conn = connect();

		$usuario = $conn->query("SELECT id, nome, sobrenome, idade FROM teste WHERE id = $id ");
		return json_encode($usuario);
	}

	function bancoTeste(){
		return "YESSSSSSSSSSSSS";
	}



	function buscarUsuarios(){
		$conn = connect();
		if($conn){
			$usuarios = $conn->query("SELECT id, nome, sobrenome, idade FROM teste");

			$arrUsuarios = array();
			while ($usuario = mysqli_fetch_array($usuarios, MYSQLI_ASSOC)) {
				$arrUsuarios = $usuario;
			}
				return 	json_encode($arrUsuarios);
		} else {
			return "FALHA AO CONECTAR";
		}
	}

	function inserirUsuario($id, $nome, $sobrenome, $idade){
		$conn = connect();

		if($conn){
			$sql = "INSERT INTO teste (id, nome, sobrenome, idade) VALUES ($id, $nome, $sobrenome, $idade)"
			mysqli_query($conn, $sql);
			return "USUARIO INSERIDO";
		}else {
			return "FALHA AO CONECTAR";
		}

	}

	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
	$server->service($HTTP_RAW_POST_DATA);
 ?>
