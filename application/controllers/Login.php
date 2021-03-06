<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Login
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->load->view('loginView');
    }

    public function signin()
    {
        $userName = trim($this->input->post('userName'));
        $password = md5($this->input->post('password'));
        
        $query = $this->Login_model->processLogin($userName, $password);


        $this->form_validation->set_rules('userName', 'Correo Electronico', 'required|callback_validateUser[' . $query->num_rows() . ']');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $this->form_validation->set_message('required', 'Enter %s');

        if ($this->form_validation->run() == false) {

            $this->load->view('loginView');

        } else {

            if ($query) {
                $query = $query->result();
                $user = array(
                    'id' => $query[0]->id,
                    'nombre' => $query[0]->nombre,
                    'mail' => $query[0]->mail,
                    'password' => $query[0]->password,
                    'id_role' => $query[0]->id_role,
                    'cel' => $query[0]->cel,
                    'logged_in' => true,
                );

                $this->session->set_userdata($user);

                if ($query[0]->id_role == 1) { //ES COBRANZA
                    redirect('Dashboard');
                } else if ($query[0]->id_role == 2) { //ES ADMIN
                    redirect('Dashboard');
                } else { // ES USER
                    redirect('Home');
                }
            }
        }
    }

    /** Custom Validation Method*/
    public function validateUser($userName, $recordCount)
    {

        if ($recordCount != 0) {

            return true;

        } else {

            $this->form_validation->set_message('validateUser', ' %s o Contraseña invalidos.');

            return false;

        }

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
