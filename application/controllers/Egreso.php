<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Egreso
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

class Egreso extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Aportacion_model');
        $this->load->model('Estadisticas_model');
    }

    public function index()
    {
        $data['title'] = 'Villa Quietud';
        $data['egreso_al_dia'] = $this->Estadisticas_model->getEgresosDelDiaActual();
        $data['egreso_15_dias'] = $this->Estadisticas_model->getEgresosUltimos15Dias();
        $data['egresos'] = $this->Aportacion_model->getEgresosActivos();
        $this->template->load('homeDashboard', 'administrador/egresosView', $data);
    }

    public function add()
    {
      
        try {
          $data['title'] = 'Villa Quietud';

          $params = array(
            'id_egreso' => null,
            'concepto_egreso' => $this->input->post('concepto_egreso'),
            'cantidad_egreso' => $this->input->post('cantidad_egreso'),
            'fecha_egreso' => date('Y-m-d'),
            'nota_egreso' => $this->input->post('nota_egreso'),
            'status_egreso' => 1,
            'id_usuario' => $this->session->userdata('id'),
          );
            
            $this->load->library('upload');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('concepto_egreso', 'Concepto egreso', 'required');
            $this->form_validation->set_rules('cantidad_egreso', 'Cantidad egreso', 'required');
            $this->form_validation->set_rules('nota_egreso', 'Nota egreso', 'required');

            if ($this->form_validation->run()) {
              
                $this->Aportacion_model->agregarEgreso($params);
                $this->session->set_flashdata('alert_msg', '<div class="alert alert-success text-center">Egreso Realizado</div>');
                redirect('Egreso');
            } else {
                $data['_view'] = 'egresos/add';
                $this->template->load('homeDashboard', 'administrador/agregarEgreso', $data);
            }
        } catch (Exception $ex) {
            throw new Exception('Egresos Controller : Error in add function - ' . $ex);
        }
    }

    public function eliminarEgreso($id_egreso)
    {
        if($this->Aportacion_model->cambiarAEliminadoEgreso($id_egreso)){
            $this->session->set_flashdata('alert_msg', '<div class="alert alert-success text-center">Egreso Eliminado</div>');
            redirect('Egreso');
        }else{
            $this->session->set_flashdata('alert_msg', '<div class="alert alert-danger text-center">Egreso No Eliminado</div>');
            redirect('Egreso');
        }
    }

    public function solicitarEstadisticasEgreso()
    {
      echo json_encode($this->Estadisticas_model->traerEgresosPorParametros($this->input->post("anio"),$this->input->post("mes")));
    }
}

/* End of file Egreso.php */
/* Location: ./application/controllers/Egreso.php */
