<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Aportacion_model
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

class Aportacion_model extends CI_Model
{

    // ------------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();
    }

    // ------------------------------------------------------------------------

    // ------------------------------------------------------------------------
    public function getAllAportaciones()
    {
        try {
            return $this->db->get('aportaciones')->result_array();
        } catch (Exception $ex) {
            throw new Exception('Aportacion_Model : Error in getAllAportaciones function - ' . $ex);
        }
    }

    public function buscarVecinoByWhere($idvecino)
    {
        $this->db->where('id', $idvecino);

        $query2 = $this->db->get('usuario');

        $this->db->limit(1);

        if ($query2->num_rows() > 0) {
            return $query2->result_array();
        } else {
            return false;
        }
    }

    public function getDatosByIdVecino($id_vecino)
    {
        try {
            return $this->db->get_where('usuario', array('id' => $id_vecino))->row_array();
        } catch (Exception $ex) {
            throw new Exception('Aportacion_Model : Error in getDatosByIdVecino function - ' . $ex);
        }
    }

    public function getCasaDelVecino($id_vecino)
    {
        try {
            return $this->db->get_where('direccion', array('id_usuario' => $id_vecino))->row_array();
        } catch (Exception $ex) {
            throw new Exception('Aportacion_Model Model : Error in getCasaDelVecino function - ' . $ex);
        }
    }

    public function getCantidadAutosByVecino($id_vecino)
    {
        try {
            $this->db->where('id_usuario', $id_vecino);
            $this->db->from('automobiles');
            return $this->db->count_all_results();
        } catch (Exception $ex) {
            throw new Exception('Aportacion_Model model : Error in getCantidadAutosByVecino function - ' . $ex);
        }
    }

    public function agregarAportacionByVecinoWithParams($params)
    {
        try {
            $this->db->insert('aportaciones', $params);
            return $this->db->insert_id();
        } catch (Exception $ex) {
            throw new Exception('Aportacion_Model model : Error in agregarAportacionByVecino function - ' . $ex);
        }
    }

    public function agregarOtraAportacionByVecinoWithParams($params)
    {
        try {
            $this->db->insert('otraaportacion', $params);
            return $this->db->insert_id();
        } catch (Exception $ex) {
            throw new Exception('Aportacion_Model model : Error in agregarOtraAportacionByVecinoWithParams function - ' . $ex);
        }
    }

    public function obtenerLaUltimaAportacionByVecino($id_vecino)
    {
        try {
            $this->db->where('id_usuario', $id_vecino);

            $this->db->where('status', 1);

            $this->db->order_by("id", "desc");

            $query2 = $this->db->get('aportaciones');

            $this->db->limit(1);

            if ($query2->num_rows() > 0) {
                return $query2->row_array();
            } else {
                return false;
            }
        } catch (Exception $ex) {
            throw new Exception('Aportacion_Model model : Error in obtenerLaUltimaAportacionByVecino function - ' . $ex);
        }
    }

    public function verificarSiHayViviendaRegistradaByVecino($id_vecino)
    {
        try {
            $this->db->where('id_usuario', $id_vecino);
            $this->db->from('direccion');
            return $this->db->count_all_results();
        } catch (Exception $ex) {
            throw new Exception('Pescados_model model : Error in get_all_pescados_count function - ' . $ex);
        }
    }

    public function getAllViviendas()
    {
        try {
            return $this->db->get('direccion')->result_array();
        } catch (Exception $ex) {
            throw new Exception('Aportacion_Model : Error in getAllViviendas function - ' . $ex);
        }
    }

    public function agregarEgreso($data)
    {
        return $this->db->insert('egresos', $data);
    }

    // ------------------------------------------------------------------------

}

/* End of file Aportacion_model.php */
/* Location: ./application/models/Aportacion_model.php */
