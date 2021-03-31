<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Vivienda
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

class Vivienda extends CI_Controller
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
        $data['viviendas'] = $this->Aportacion_model->getAllViviendas();
        $data['usuarios'] = $this->Usuario_model->obtenerTodosLosUsuarios();
        $data['ubicaciones'] = $this->Usuario_model->obtenerTodasLasUbicaciones();
        $data['direcciones'] = $this->Usuario_model->obtenerTodasLasUbicacionesDireccciones();
        $this->template->load('homeDashboard', 'administrador/verViviendas', $data);
    }

}

/* End of file Vivienda.php */
/* Location: ./application/controllers/Vivienda.php */
