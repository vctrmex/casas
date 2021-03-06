<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Dashboard
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Manuel Canul
 * @param     ...
 * @return    ...
 *
 */

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('logged_in')){
          if($this->session->userdata('id_role') == 3){ //QUE ES USUARIO
            //$this->session->set_flashdata('alert_msg', '<br><div class="alert alert-danger text-center">Nivel de Permiso no concedido.</div>');
            redirect('Home');
          }
        }else{
          redirect('Login');
        }
    }

    public function index()
    {
      $data['title'] = 'Villa Quietud';
      $this->template->load('homeDashboard', 'administrador/inicioDash', $data);
    }

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
