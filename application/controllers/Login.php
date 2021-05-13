<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	public function __construct()
    {
		parent::__construct();


		$this->load->helper("url");
		$this->load->helper("Test");
        $this->load->model('Usuario_model');
	}
	

	public function index()
	{   
		$this->load->view('auth/login');
		
	}



	public function conectarControlador(){
		echo "<h1 style='color: red;'>Hola Mundo!</h1>";

	}

	public function validarUsuario($nombre = null, $clave = null)
	{
		//Por parámetros es para traer valores por url
		$retorno = array();
		$nombre = $this->input->post('user');
		$clave 	= $this->input->post('pass');

		if($nombre != null && $clave != null){

			
			
			$resultado = $this->Usuario_model->getUsuario($nombre, $clave);

			if($resultado!= null){
			
				
				$retorno["ok"]		= true;	
				
			}else{
				$retorno["ok"]		= false;	
				$retorno["titulo"] 	= "El usuario no existe";
				$retorno["mensaje"] = "Verifique el nombre y la clave";
				$retorno["color"] 	= "orange";
			}
			echo json_encode($retorno);
		}else{
			$resultado = $this->Usuario_model->getUsuario($nombre, $clave);

			if($resultado !=null){
				echo "<h1>Encontró el usuario llamado: $nombre</h1>";
			}else{
				echo "<h2>El usuario no existe</h2>";
			}
		}
		
	}
}





