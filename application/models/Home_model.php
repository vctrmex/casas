<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Home_model
 *
 * This Model for ...
 *
 * @package        CodeIgniter
 * @category    Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Home_model extends CI_Model
{

    // ------------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();
    }

    // ------------------------------------------------------------------------

    // ------------------------------------------------------------------------
    public function traerAutomovilesDelUsuario($id_vecino)
    {
        try {
            return $this->db->get_where('automobiles', array('id_usuario ' => $id_vecino))->result_array();
        } catch (Exception $ex) {
            throw new Exception('Aportacion_Model : Error in getDatosByIdVecino function - ' . $ex);
        }
    }

    public function onlyGenerateQR($id_vecino)
    {
        $this->load->library('ciqrcode');

        $id_vecino = sprintf('%06d',$id_vecino);

        $params['data'] = $id_vecino;
        $params['size'] = 10;
        $params['savename'] = FCPATH.'/resources/qrcodes/'. 'qr_code_'.$id_vecino.'.png';
        $this->ciqrcode->generate($params);
    }

    // ------------------------------------------------------------------------

}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */
