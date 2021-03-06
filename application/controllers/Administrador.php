<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function login()
	{
		$this->load->view('administrador/login.php');
	}

    public function dashboard()
	{
		$this->load->view('administrador/dashboard.php');
	}

    public function altausuarios(){
        $this->load->view('administrador/alta.php');
    }

	public function add(){
		include APPPATH . 'third_party/CalixtaAPI.php';
		$this->load->model("Usuario");
		$nombre = $this->input->post('nombre');
		$mail = $this->input->post('mail');
		$pass = $this->getpass();
		$cel = $this->input->post('cel');
		$id_rol = $this->input->post('id_role');

		$data = array('nombre'=>$nombre,
		'mail'=>$mail,
		'password'=>md5($pass),
		'id_role'=>$id_rol,
		'cel'=>$cel);
		 $this->Usuario->add($data);
		 $calixta = new CalixtaAPI();
         $calixta->enviaMensajeOL($cel,'Su codigo de registro VQ.com es : '.$pass, 'SMS', 125);
          //$ret = 1;
		redirect('administrador/dashboard', 'refresh');



		//$this->load->view('administrador/alta.php');
	}

	public function getpass(){

		$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
   		$password = "";
   		//Reconstruimos la contraseña segun la longitud que se quiera
   		for($i=0;$i<8;$i++) {
      	//obtenemos un caracter aleatorio escogido de la cadena de caracteres
      	$password .= substr($str,rand(0,62),1);
		
		}

		return $password;

	}


}
