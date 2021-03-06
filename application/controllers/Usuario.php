<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data = array('ban' => 0);
        $this->load->view('usuario/login', $data);
    }

    public function forgot()
    {

        $this->load->view('usuario/forgot.php');

    }

    public function dashboard()
    {

        $this->load->view('usuario/dashboard.php');

    }

    public function login()
    {

        $this->load->model("Administrador");
        $nombre = $this->input->post('email');
        $mail = $this->input->post('password');
        $r = $this->Administrador->validate($nombre, $mail);

        if ($r > 0) {

            redirect('usuario/dashboard', 'refresh');

        } else {

            $data = array('ban' => 1);
            redirect('../', 'refresh', $data);

        }
    }

}
