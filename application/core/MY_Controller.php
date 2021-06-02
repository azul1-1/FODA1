<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function plantillaFoda($param)
	{
		$this->load->view('plantilla/foda/head');
		$this->load->view('plantilla/foda/navbar', $param['data']);
		$this->load->view($param['vista'], $param['data']);
		$this->load->view('plantilla/foda/footer');
	}
	public function plantillaLogin($param)
	{
		$this->load->view('plantilla/login/head', $param['data']);
		$this->load->view($param['vista'], $param['data']);
		$this->load->view('plantilla/login/footer');
    }
    
    #Checkea session activa y redirecciona segun parametro, además manda datos y claves de captcha si es 'true'
	public function validaNoSalirSinCerrarSesion($vista, $data, $captcha = false)
	{
		if (isset($_SESSION['USER'])) {
			header("location: " . base_url('/index.php/Mis_postulaciones'));
		} else {
			$this->session->sess_destroy();
            $this->removeCache();
            /*
            if ($captcha == true) $data["clientKey"] = $this->captchaKeys()["client-key"];
            */
			return $this->load->view('login/' . $vista, $data);
		}
    }
    
    #Elimina cache generado
	public function removeCache()
	{
		$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this->output->set_header('Pragma: no-cache');
    }
    
    #Crea key pública y key secreta para el Captcha
	protected function captchaKeys()
	{
		$reCaptcha["client-key"] = "ijdqoijqowidjoqwidjqowdijqowdijqowdjoqjwid";
		$reCaptcha["secret-key"] = "dqwidoqwdjowqdjowqidjoiwowiqdjowqidjowqidj";
		return $reCaptcha;
	}
}
