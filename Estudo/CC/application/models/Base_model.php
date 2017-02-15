<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function salvar(){
		echo "Aqui vai a lógica de salvar";
	}

	public function editar(){
		echo "Aqui vai a lógica de editar";
	}

	public function excluir(){
		echo "Aqui vai a lógica de excluir";
	}

}	