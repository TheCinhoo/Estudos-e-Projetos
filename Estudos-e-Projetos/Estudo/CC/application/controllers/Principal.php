<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$dados['titulo']   = "CentroCópias - Soluções Gráficas e Digitais.";
		$dados['conteudo'] = "É importante questionar o quanto a competitividade nas transações comerciais representa uma abertura para a melhoria das posturas dos órgãos dirigentes com relação às suas atribuições.";
		$this->load->view('principal', $dados);
	}

}
