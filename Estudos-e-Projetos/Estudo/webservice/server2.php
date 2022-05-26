<?
require_once("lib/nusoap.php");

 $soap = new soap_server;
 $soap->configureWSDL('WS-Bombeiros', 'https://localhost/Estudo/webservice/server2.php');
 $soap->wsdl->schemaTargetNamespace = 'Bombeiros';

 $soap->register(
       'info',
       array(),
       array('x' => 'xsd:string'),
       'http://soapinterop.org/'
   );

 $soap->register(
     'post_java',
     array(),
     array('x' => 'xsd:string'),
     'http://soapinterop.org/'
 );

 $soap->register(
     'post_php',
     array(),
     array('x' => 'xsd:string'),
     'http://soapinterop.org/'
 );

 $soap->register(
     'login_user',
     array('login' => 'xsd:string','pass' => 'xsd:int'),
     array('x' => 'xsd:string'),
     'http://soapinterop.org/'
 );

$soap->service(isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '');

function info(){
   return "WebCodeFree - Desenvolvimento Web.";
}

function post_java(){
   return "Em Breve Acesso a Postagens Java Via Servico";
}

function post_php(){
   return "Em Breve Acesso a Postagens PHP Via Servico";
}

function login_user($login, $senha){
   return "Seja Bem Vindo Usuario ". $login . "!!!";
}
?>
