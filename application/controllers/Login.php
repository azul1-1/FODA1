<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper("test");
		$this->load->helper("mensajes");
		$this->load->model('Usuario_model');
	}


	public function index()
	{
		$data = array(
			'titulo' => 'FODASOFT | Autenticación'
		);
		$param = array(
			'vista'	=> 'outside/login',
			'data'	=> $data
		);
		$this->plantillaLogin($param);
	}



	public function conectarControlador()
	{
		echo "<h1 style='color: red;'>Hola Mundo!</h1>";
	}

	public function validarUsuario()
	{
		$retorno = array();
		$nombre = addslashes(trim($this->input->post('usuario')));
		$clave 	= addslashes(trim($this->input->post('clave')));

		$resultado = $this->Usuario_model->getUsuario($nombre, $clave);

		if ($resultado != null) {
			$retorno["ok"]		= true;
			$retorno["icon"] 	= Icon::CHECK;
			$retorno["mensaje"] = "Entrando";
			$retorno["color"] 	= Color::VERDE;
		} else {
			$retorno["ok"]		= false;
			$retorno["icon"] 	= Icon::ALERT;
			$retorno["mensaje"] = "Verifique el nombre y la clave";
			$retorno["color"] 	= Color::AMARILLO;
		}
		echo json_encode($retorno);
	}
}
