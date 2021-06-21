<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mantencion extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }
    
	public function index()
	{   
        $data = array();
		$param = array(
			'vista'	=> 'outside/mantencion',
			'data'	=> $data
		);
		$this->plantillaLogin($param);
    }
}