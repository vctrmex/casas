<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Aportacion_model');
        $this->load->model('Usuario_model');
    }

    public function index()
    {
        $data['title'] = 'Villa Quietud';
        $data['usuarios'] = $this->Usuario_model->obtenerTodosLosUsuarios();
        $this->template->load('homeDashboard', 'administrador/verUsuarios', $data);
    }

    public function forgot()
    {

        $this->load->view('usuario/forgot.php');

    }

    public function dashboard()
    {
        $this->load->view('usuario/dashboard.php');
    }

    public function agregarUsuarioAlSistema()
    {
        $data = array('ban' => 0);
        $this->load->view('usuario/login', $data);
    }

    public function add()
    {
        include APPPATH . 'third_party/CalixtaAPI.php';

        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('mail', 'mail', 'required');
        $this->form_validation->set_rules('cel', 'cel', 'required');
        $this->form_validation->set_rules('id_role', 'id_role', 'required');

        if ($this->form_validation->run() == false) {
            //INFLAR VISTA SIN NADA
            $data['title'] = 'Villa Quietud';
            $data['roles'] = $this->Usuario_model->obtenerTodosLosRoles();
            $this->template->load('homeDashboard', 'administrador/agregarUsuario', $data);
        } else {

            echo "ey";
            $nombre = $this->input->post('nombre');
            $mail = $this->input->post('mail');
            $pass = $this->Usuario_model->getpass();
            $cel = $this->input->post('cel');
            $id_rol = $this->input->post('id_role');

            $data = array(
                'nombre' => $nombre,
                'mail' => $mail,
                'password' => md5($pass),
                'id_role' => $id_rol,
                'cel' => $cel);

            $id_usuario = $this->Usuario_model->add($data);

            //echo '<script type="text/javascript"> alert("' . $pass . '"); </script>';
            //$calixta = new CalixtaAPI();
            //$calixta->enviaMensajeOL($cel, 'Su codigo de registro VQ.com es : ' . $pass, 'SMS', 125);
            //$ret = 1;
            $this->session->set_flashdata('alert_msg', '<br><div class="alert alert-success text-center">Usuario Agregado al sistema, agregue una dirección del mismo.</div>');
            redirect('Usuario/agregarDireccion/'.$id_usuario);

            //$this->load->view('administrador/alta.php');
        }
    }

    public function agregarDireccion($id_usuario)
    {
        $this->form_validation->set_rules('calle', 'calle', 'required');
        $this->form_validation->set_rules('numeroext', 'numeroext', 'required');
        $this->form_validation->set_rules('piso', 'piso', 'required');
        $this->form_validation->set_rules('colonia', 'colonia', 'required');
        $this->form_validation->set_rules('alcaldia', 'alcaldia', 'required');
        $this->form_validation->set_rules('ciudad', 'ciudad', 'required');

        if ($this->form_validation->run() == false) {
            //INFLAR VISTA SIN NADA
            $data['title'] = 'Villa Quietud';
            $data['id_usuario'] = $id_usuario;
            $this->template->load('homeDashboard', 'administrador/agregarDireccion', $data);
        } else {
            $direccion = array(
                'id' => null,
                'calle' => $this->input->post('calle'),
                'numeroext' => $this->input->post('numeroext'),
                'piso' => $this->input->post('piso'),
                'colonia' => $this->input->post('colonia'),
                'alcaldia' => $this->input->post('alcaldia'),
                'ciudad' => $this->input->post('ciudad'),
                'id_usuario' => $this->input->post('id_usuario')
            );

            if($this->Usuario_model->agregarDireccionWithUser($direccion)){
                $this->session->set_flashdata('alert_msg', '<br><div class="alert alert-success text-center">Usuario Agregado al sistema.</div>');
                redirect('Usuario');
            }else{
                $this->session->set_flashdata('alert_msg', '<br><div class="alert alert-danger text-center">Dirección no agregada al sistema.</div>');
                redirect('Usuario');
            }
        }
    }

}
