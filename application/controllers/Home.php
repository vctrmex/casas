<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Home
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

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Aportacion_model');
        $this->load->model('Home_model');
        $this->load->model('Estadisticas_model');
    }

    public function index()
    {
        $data['title'] = 'Villa Quietud';
        //DATOS DEL USUARIO
        $data['vecino'] = $this->Aportacion_model->getDatosByIdVecino($this->session->userdata('id'));
        
        $direcciondedb = $this->Aportacion_model->getCasaDelVecino($this->session->userdata('id'));

        $direccionsola = $this->Aportacion_model->traerDireccionSola($direcciondedb['calle']);

        $data['casadelvecino'] = array('calle' => $direccionsola.', '.$direcciondedb['colonia'].', '.$direcciondedb['alcaldia'].', '.$direcciondedb['ciudad']);

        $data['cantidad_carros_del_vecino'] = $this->Aportacion_model->getCantidadAutosByVecino($this->session->userdata('id'));

        $data['total_viviendas'] = $this->Estadisticas_model->getCantidadViviendasRegistradas();

        if ($this->Aportacion_model->obtenerLaUltimaAportacionByVecino($this->session->userdata('id')) == null) {
            $data['ultima_aportacion_del_vecino'] = false;
        } else {
            $data['ultima_aportacion_del_vecino'] = $this->Aportacion_model->obtenerLaUltimaAportacionByVecino($this->session->userdata('id'));
        }

        $data['chat_whats'] = $this->Aportacion_model->traerChat($direcciondedb['calle']);

        $data['total_ingresos'] = $this->Estadisticas_model->sumaIngresoTotalMesActual();

        $data['total_egresos'] = $this->Estadisticas_model->sumaEgresoTotalMesActual();

        $this->template->load('homeDashboard', 'usuario/inicioUsuario', $data);
    }

    public function guardarCodigoQR()
    { //Download images from remote server
        $inPath = 'https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=' . sprintf('%06d', $this->session->userdata('id')) . '&choe=UTF-8';
        $outPath = 'miCodigo.jpg';
        $in = fopen($inPath, "rb");
        $out = fopen($outPath, "wb");
        while ($chunk = fread($in, 8192)) {
            fwrite($out, $chunk, 8192);
        }
        fclose($in);
        fclose($out);
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
