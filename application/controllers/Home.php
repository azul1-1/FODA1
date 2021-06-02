<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$this->load->helper('url');
		//$this->load->view('app/home.php');
		$data 			= array();
        $paramView = array(
                        'vista'	=> 'app/home',
                        'data'	=> $data
                    );

		$this->plantillaFoda($paramView);
	}
}