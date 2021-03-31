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
        $this->load->model('Estadisticas_model');

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
      $data['cantidad_ingresos_al_dia'] = $this->Estadisticas_model->getIngresosDelDiaActual();
      $data['cantidad_ingresos_15_dias'] = $this->Estadisticas_model->getIngresosUltimos15Dias();
      $data['total_vecinos_que_aportaron_hoy'] = $this->Estadisticas_model->getCantidadVecinosQueAportaronHoy();
      $data['total_vecinos_aportaron_al_mes'] = $this->Estadisticas_model->getTotalVecinosQueAportaronAlMes();
      $data['total_vecinos_aportaron_15_dias'] = $this->Estadisticas_model->getCantidadVecinosQueAportaron15Dias();
      $data['total_viviendas'] = $this->Estadisticas_model->getCantidadViviendasRegistradas();
      $data['total_autos'] = $this->Estadisticas_model->getCantidadVehiculosRegistrados();

      
      $this->template->load('homeDashboard', 'administrador/inicioDash', $data);
    }

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
