<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Aportacion_model');
        $this->load->model('Usuario_model');
        $this->load->model('Home_model');
        $this->load->model('Estadisticas_model');

    }

    public function index()
    {
        $data['title'] = 'Villa Quietud';
        $data['usuarios'] = $this->Usuario_model->obtenerTodosLosUsuariosUsers();
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

        $this->form_validation->set_rules('nombre2', 'Contacto Secundario', 'required');
        $this->form_validation->set_rules('cel2', 'No. Celular Secundario', 'required');

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

            $nombre2 = $this->input->post('nombre2');
            $cel2 = $this->input->post('cel2');

            $data = array(
                'nombre' => $nombre,
                'mail' => $mail,
                'password' => md5($pass),
                'id_role' => $id_rol,
                'cel' => $cel,
                'nombre2' => $nombre2,
                'cel2' => $cel2);

            $id_usuario = $this->Usuario_model->add($data);

            $this->Home_model->onlyGenerateQR($id_usuario);

            echo '<script type="text/javascript"> alert("' . $pass . '"); </script>';

            if($id_rol == 3){
                $this->session->set_flashdata('alert_msg', '<br><div class="alert alert-success text-center">Usuario Agregado al sistema, agregue una dirección del mismo.</div>');
                redirect('Usuario/agregarDireccion/'.$id_usuario);
            }else{
                $this->session->set_flashdata('alert_msg', '<br><div class="alert alert-success text-center">Usuario Agregado al sistema.</div>');
                redirect('Usuario');
            }
            //$calixta = new CalixtaAPI();
            //$calixta->enviaMensajeOL($cel, 'Su codigo de registro VQ.com es : ' . $pass, 'SMS', 125);
            //$ret = 1;
            

            //$this->load->view('administrador/alta.php');
        }
    }

    public function editarUsuario($id_usuario)
    {
        $id_vecino = ltrim($id_usuario, '0');

        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('mail', 'mail', 'required');
        $this->form_validation->set_rules('cel', 'cel', 'required');

        $this->form_validation->set_rules('nombre2', 'Contacto Secundario', 'required');
        $this->form_validation->set_rules('cel2', 'No. Celular Secundario', 'required');

        if ($this->form_validation->run() == false) {
            
            $data['title'] = 'Villa Quietud';
            $data['id_usuario'] = $id_vecino;
            $data['roles'] = $this->Usuario_model->obtenerTodosLosRoles();
            $data['vecino'] = $this->Aportacion_model->getDatosByIdVecino($id_vecino);
            $this->template->load('homeDashboard', 'usuario/editarUsuario', $data);
        }else{
            $nombre = $this->input->post('nombre');
            $mail = $this->input->post('mail');
            $cel = $this->input->post('cel');
            $id_rol = $this->input->post('id_role');

            $nombre2 = $this->input->post('nombre2');
            $cel2 = $this->input->post('cel2');

            $data = array(
                'nombre' => $nombre,
                'mail' => $mail,
                'id_role' => $id_rol,
                'cel' => $cel,
                'nombre2' => $nombre2,
                'cel2' => $cel2);

            if($this->Usuario_model->actualizarUsuario($data,$id_vecino)){
                $this->session->set_flashdata('alert_msg', '<br><div class="alert alert-success text-center">Usuario Actualizado.</div>');
                redirect('Usuario/verUsuario/'.sprintf('%06d', $id_vecino));
            }
        }

        
    }

    public function agregarDireccion($id_usuario)
    {
        $this->form_validation->set_rules('calle', 'calle', 'required');
        $this->form_validation->set_rules('piso', 'No. Ext', 'required');
        $this->form_validation->set_rules('colonia', 'colonia', 'required');
        $this->form_validation->set_rules('alcaldia', 'alcaldia', 'required');
        $this->form_validation->set_rules('ciudad', 'ciudad', 'required');

        if ($this->form_validation->run() == false) {
            //INFLAR VISTA SIN NADA
            $data['title'] = 'Villa Quietud';
            $data['id_usuario'] = $id_usuario;
            $data['direcciones'] = $this->Usuario_model->obtenerTodasLasUbicacionesDireccciones();
            $this->template->load('homeDashboard', 'administrador/agregarDireccion', $data);
        } else {
            $direccion = array(
                'id' => null,
                'calle' => $this->input->post('calle'),
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

    public function verUsuario($id_vecino)
    {
        $id_vecino = ltrim($id_vecino, '0');
        $data['vecino'] = $this->Aportacion_model->getDatosByIdVecino($id_vecino);

        $direcciondedb = $this->Aportacion_model->getCasaDelVecino($id_vecino);

        $direccionsola = $this->Aportacion_model->traerDireccionSola($direcciondedb['calle']);

        $data['casadelvecino'] = array('calle' => $direccionsola.', '.$direcciondedb['colonia'].', '.$direcciondedb['alcaldia'].', '.$direcciondedb['ciudad']);

        $data['chat_whats'] = $this->Aportacion_model->traerChat($direcciondedb['calle']);
        //CARROS DEL USUARIO
        $data['carros'] = $this->Home_model->traerAutomovilesDelUsuario($id_vecino);
        //OTRAS APORTACIONES
        $data['otrasaportaciones'] = $this->Aportacion_model->getAllOtrasAportaciones($id_vecino);

        $data['usuarios'] = $this->Usuario_model->obtenerTodosLosUsuarios();
        $data['ubicaciones'] = $this->Usuario_model->obtenerTodasLasUbicaciones();
        $data['aportaciones'] = $this->Aportacion_model->getAllAportacionesByVecino($id_vecino);

        if ($this->Aportacion_model->obtenerLaUltimaAportacionByVecino($id_vecino) == null) {
            $data['ultima_aportacion_del_vecino'] = false;
        } else {
            $data['ultima_aportacion_del_vecino'] = $this->Aportacion_model->obtenerLaUltimaAportacionByVecino($id_vecino);
        }

        $data['title'] = 'Villa Quietud';

        $data['id_usuario'] = $id_vecino;

        $this->template->load('homeDashboard', 'administrador/verUsuarioSolo', $data);
    }

    public function verMisAportaciones()
    {
        # code...verMisAportaciones.php
        $data['title'] = 'Villa Quietud';
        $data['usuarios'] = $this->Usuario_model->obtenerTodosLosUsuarios();
        $data['ubicaciones'] = $this->Usuario_model->obtenerTodasLasUbicaciones();
        $data['aportaciones'] = $this->Aportacion_model->getAllAportacionesByVecino($this->session->userdata('id'));
        $this->template->load('homeDashboard', 'usuario/verMisAportaciones', $data);
    }

    public function balanceDeIngresosEgresos()
    {
        $data['title'] = 'Villa Quietud';

        $data['ingresos'] = $this->Estadisticas_model->traerIngresosParaBalance();
        $data['egresos'] = $this->Estadisticas_model->traerEgresosParaBalance();

        $data['total_ingresos'] = $this->Estadisticas_model->sumaIngresoTotalMesActual();
        $data['total_egresos'] = $this->Estadisticas_model->sumaEgresoTotalMesActual();

        $this->template->load('homeDashboard', 'usuario/balanceIE', $data);
    }

    public function verAutomoviles($id_vecino)
    {
        $id_vecino = ltrim($id_vecino, '0');

        $data['coches'] = $this->Usuario_model->traerCochesDelUsuario($id_vecino);

        $data['title'] = 'Villa Quietud';

        $data['id_usuario'] = $id_vecino;

        $this->template->load('homeDashboard', 'usuario/verCoches', $data);
    }

    public function agregarCoche($id_usuario)
    {
        $id_vecino = ltrim($id_usuario, '0');

        $this->form_validation->set_rules('marca', 'marca', 'required');
        $this->form_validation->set_rules('modelo', 'modelo', 'required');
        $this->form_validation->set_rules('anio', 'Año', 'required');
        $this->form_validation->set_rules('color', 'color', 'required');
        $this->form_validation->set_rules('placas', 'placas', 'required');

        if ($this->form_validation->run() == false) {
            //INFLAR VISTA SIN NADA
            $data['title'] = 'Villa Quietud';
            $data['id_usuario'] = $id_vecino;
            $this->template->load('homeDashboard', 'usuario/agregarCoche', $data);
        } else {

            $coche = array(						
                'id' => null,
                'fecharegistro' => date('Y-m-d'),
                'marca' => $this->input->post('marca'),
                'modelo' => $this->input->post('modelo'),
                'anio' => $this->input->post('anio'),
                'color' => $this->input->post('color'),
                'placas' => $this->input->post('placas'),
                'id_usuario' => $this->input->post('id_usuario')
            );

            if($this->Usuario_model->agregarNuevoCoche($coche)){
                $this->session->set_flashdata('alert_msg', '<br><div class="alert alert-success text-center">Coche Agregado al sistema.</div>');
                redirect('Usuario/verAutomoviles/'.sprintf('%06d', $id_vecino));
            }else{
                $this->session->set_flashdata('alert_msg', '<br><div class="alert alert-danger text-center">Coche no agregada al sistema.</div>');
                redirect('Usuario/verAutomoviles/'.sprintf('%06d', $id_vecino));
            }
        }
    }
}
