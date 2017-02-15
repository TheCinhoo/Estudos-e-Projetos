<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		echo "Chuchu";
	}

	public function login(){
		echo "login";
	}
}