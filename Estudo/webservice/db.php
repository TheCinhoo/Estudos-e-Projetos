<?php
echo "<html><head><title>BANCO DE DADOS</title></head></html>";
require_once 'lib/loader_client.php';
$userlogin = $usuario = USUARIO_SOLICITACAO;
$passwd = SENHA_SOLICITACAO;
$rotina = "25";
$ses = $global_obj_sessao->authenticate ($userlogin, $passwd,$rotina);
$arquivo = "solic_funcionamento.php";

$conn = new BD (BD_HOST, BD_USER, BD_PASS, BD_NOME_ACESSOS);
if ($conn->get_status()==false){
  die(email_erro($conn->get_msg()));
}

?>
