<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Aportacion
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

class Aportacion extends CI_Controller
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
        $data['ubicaciones'] = $this->Usuario_model->obtenerTodasLasUbicaciones();
        $data['direcciones'] = $this->Usuario_model->obtenerTodasLasUbicacionesDireccciones();
        //$data['ubicaciones'] = $this->Usuario_model->obtenerTodasLasUbicacionesDireccciones();
        $data['aportaciones'] = $this->Aportacion_model->getAllAportaciones();
        $this->template->load('homeDashboard', 'administrador/aportacionesView', $data);
    }

    public function buscarVecino()
    {
        $anIdVecino = $this->input->post('idvecino');
        $iddevecino = ltrim($this->input->post('idvecino'), '0');
        if ($this->Aportacion_model->buscarVecinoByWhere($iddevecino)) {
            redirect('Aportacion/agregarAportacion/' . $anIdVecino);
        } else {
            $this->session->set_flashdata('ultimoid_consultado', $anIdVecino);
            $this->session->set_flashdata('alert_msg', '<br><div class="alert alert-danger text-center">Vecino no encontrado.</div>');
            redirect('Aportacion');
        }
    }

    public function agregarAportacion($idvecinolargo)
    {
      $copiaidvecino = $idvecinolargo;
      $idvecinolargo = ltrim($idvecinolargo, '0');
      $data['title'] = 'Villa Quietud';
      $data['id_vecino'] = $idvecinolargo;

      if($this->Aportacion_model->verificarSiHayViviendaRegistradaByVecino($idvecinolargo) == 0){
        $this->session->set_flashdata('ultimoid_consultado', $copiaidvecino);
        $this->session->set_flashdata('alert_msg', '<br><div class="alert alert-info text-center">Debe de agregar primero una dirección para este usuario.</div>');
        redirect('Aportacion');
      }else{
        if($this->Aportacion_model->obtenerLaUltimaAportacionByVecino($idvecinolargo) == null){
          $data['ultima_aportacion_del_vecino'] = array(
            'cantidad' => 0,
            'mes_aportacion' => 13,
            'anio_aportacion' => 'Sin Registro'
          );
        }else{
          $data['ultima_aportacion_del_vecino'] = $this->Aportacion_model->obtenerLaUltimaAportacionByVecino($idvecinolargo);
        }
        $data['vecino'] = $this->Aportacion_model->getDatosByIdVecino($idvecinolargo);

        $direcciondedb = $this->Aportacion_model->getCasaDelVecino($idvecinolargo);

        $direccionsola = $this->Aportacion_model->traerDireccionSola($direcciondedb['calle']);

        $data['casadelvecino'] = array('calle' => $direccionsola);

        $data['cantidad_carros_del_vecino'] = $this->Aportacion_model->getCantidadAutosByVecino($idvecinolargo);
        $this->template->load('homeDashboard', 'administrador/registrarAportacionView', $data);
      }
    }

    public function agregarAportacionByVecino()
    {
        $anIdVecino = $this->input->post('id_vecino');
        $iddevecino = ltrim($this->input->post('id_vecino'), '0');

        $nuevaAportacion = array(
            'id' => null,
            'fecharegistro' => date('Y-m-d H:m:i'),
            'mes_aportacion' => $this->input->post('mes_aportacion'),
            'anio_aportacion' => $this->input->post('anio_aportacion'),
            'cantidad' => $this->input->post('cantidad_aportacion'),
            'status' => 1,
            'id_usuario' => $iddevecino,
            'comentario_aportacion' => $this->input->post('comentarios_aportacion'),
        );

        if ($this->Aportacion_model->agregarAportacionByVecinoWithParams($nuevaAportacion)) {
            $this->session->set_flashdata('alert_msg', '<br><div class="alert alert-success text-center">Aportacion Agregada.</div>');
            redirect('Aportacion/agregarAportacion/' . $anIdVecino);
        } else {
            $this->session->set_flashdata('alert_msg', '<br><div class="alert alert-danger text-center">Aportacion no Agregada.</div>');
            redirect('Aportacion/agregarAportacion/' . $anIdVecino);
        }
    }

    public function agregarOtraAportacionByVecino()
    {
        $anIdVecino = $this->input->post('id_vecino');
        $iddevecino = ltrim($this->input->post('id_vecino'), '0');

        $nuevaAportacion = array(
            'id' => null,
            'descripcion' => $this->input->post('descripcion'),
            'cantidad' => $this->input->post('unidades'),
            'fecha' => date('Y-m-d H:m:i'),
            'id_usuario' => $iddevecino
        );

        if ($this->Aportacion_model->agregarOtraAportacionByVecinoWithParams($nuevaAportacion)) {
            $this->session->set_flashdata('alert_msg', '<br><div class="alert alert-success text-center">Otra Aportacion/Donacion Agregada.</div>');
            redirect('Aportacion/agregarAportacion/' . $anIdVecino);
        } else {
            $this->session->set_flashdata('alert_msg', '<br><div class="alert alert-danger text-center">Otra Aportacion/Donacion no Agregada.</div>');
            redirect('Aportacion/agregarAportacion/' . $anIdVecino);
        }
    }

    public function editarAportacion($id)
    {
        try {
            $aportacion = $this->Aportacion_model->get_aportacion($id);
            // check if the automobiles exists before trying to delete it
            if (isset($aportacion['id'])) {

                $params = array(
                    'mes_aportacion' => $this->input->post('mes_aportacion'),
                    'anio_aportacion' => $this->input->post('anio_aportacion'),
                    'cantidad' => $this->input->post('cantidad_aportacion'),
                    'comentario_aportacion' => $this->input->post('comentarios_aportacion'),
                );

                $this->form_validation->set_rules('mes_aportacion', 'mes_aportacion', 'required');
                $this->form_validation->set_rules('anio_aportacion', 'anio_aportacion', 'required');
                $this->form_validation->set_rules('cantidad_aportacion', 'cantidad_aportacion', 'required');
                $this->form_validation->set_rules('comentarios_aportacion', 'comentarios_aportacion', 'required');

                if ($this->form_validation->run()) {
                    $this->Aportacion_model->update_aportacion($aportacion['id'], $params);
                    $this->session->set_flashdata('alert_msg', '<div class="alert alert-success text-center">Aportación Editada.</div>');
                    redirect('Aportacion');
                } else {
                    $data['title'] = 'Villa Quietud';
                    $data['aportacion'] = $this->Aportacion_model->get_aportacion($id);
                    $this->template->load('homeDashboard', 'administrador/editarAportacion', $data);
                }

                
            } else {
                show_error('The aportacion you are trying to delete does not exist.');
            }

        } catch (Exception $ex) {
            throw new Exception('aportacion Controller : Error in remove function - ' . $ex);
        }
    }

    public function eliminarAportacion($id)
    {
        try {
            $aportacion = $this->Aportacion_model->get_aportacion($id);
            // check if the automobiles exists before trying to delete it
            if (isset($aportacion['id'])) {
                $this->Aportacion_model->delete_aportacion($id);
                $this->session->set_flashdata('alert_msg', '<div class="alert alert-success text-center">Aportacion Eliminada.</div>');
                redirect('Aportacion');
            } else {
                show_error('The aportacion you are trying to delete does not exist.');
            }

        } catch (Exception $ex) {
            throw new Exception('aportacion Controller : Error in remove function - ' . $ex);
        }
    }
}

/* End of file Aportacion.php */
/* Location: ./application/controllers/Aportacion.php */
