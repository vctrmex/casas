<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Ingreso
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

class Ingreso extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Estadisticas_model');
        $this->load->model('Usuario_model');
        $this->load->model('Aportacion_model');
    }

    public function index()
    {
      $data['title'] = 'Villa Quietud';
      $data['cantidad_ingresos_al_dia'] = $this->Estadisticas_model->getIngresosDelDiaActual();
      $data['cantidad_ingresos_15_dias'] = $this->Estadisticas_model->getIngresosUltimos15Dias();
      $data['total_vecinos_aportaron_al_mes'] = $this->Estadisticas_model->getTotalVecinosQueAportaronAlMes();
      $data['usuarios'] = $this->Usuario_model->obtenerTodosLosUsuarios();
      $data['ubicaciones'] = $this->Usuario_model->obtenerTodasLasUbicaciones();
      $data['aportaciones'] = $this->Aportacion_model->getAllAportaciones();
      $data['cantidad_ingresos_al_mes'] = $this->Estadisticas_model->traerIngresosParaBalanceDash();
      $this->template->load('homeDashboard', 'administrador/ingresosView', $data);
    }

    public function solicitarEstadisticaIngresos()
    {
      echo json_encode($this->Estadisticas_model->traerIngresosPorParametros($this->input->post("anio"),$this->input->post("mes")));
    }

}

/* End of file Ingreso.php */
/* Location: ./application/controllers/Ingreso.php */
