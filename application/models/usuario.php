<?php if (!defined('BASEPATH')) {
    exit('no existe pagina');
}

class Usuario extends CI_model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function add($data = null)
    {
        $this->db->insert('usuario', $data);
    }

    public function validate($user = null, $pass = null)
    {

        $this->db->select('*');
        $query = $this->db->get('usuario');
        $query = $this->db->where('password', md5($pass));
        $query = $this->db->where('mail', $user);
        return $query->num_rows();

    }

    public function obtenerTodosLosUsuarios()
    {
        try {
            return $this->db->get('usuario')->result_array();
        } catch (Exception $ex) {
            throw new Exception('Usuario model : Error in obtenerTodosLosUsuarios function - ' . $ex);
        }
    }

    public function obtenerTodasLasUbicaciones()
    {
        try {
            return $this->db->get('direccion')->result_array();
        } catch (Exception $ex) {
            throw new Exception('Usuario model : Error in obtenerTodasLasUbicaciones function - ' . $ex);
        }
    }
}
