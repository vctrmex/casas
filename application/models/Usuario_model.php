<?php if (!defined('BASEPATH')) {
    exit('no existe pagina');
}

class Usuario_model extends CI_model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function add($data = null)
    {
        $this->db->insert('usuario', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function actualizarUsuario($data, $id_cliente)
    {
        $this->db->where('id', $id_cliente);
        return $this->db->update('usuario', $data);
    }

    public function agregarDireccion($params)
    {
        $this->db->insert('direcciones', $params);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function validate($user = null, $pass = null)
    {

        $this->db->select('*');
        $query = $this->db->get('usuario');
        $query = $this->db->where('password', md5($pass));
        $query = $this->db->where('mail', $user);
        return $query->num_rows();

    }

    public function traerCochesDelUsuario($id_vecino)
    {
        try {
            $this->db->where('id_usuario', $id_vecino);
            return $this->db->get('automobiles')->result_array();
        } catch (Exception $ex) {
            throw new Exception('Usuario model : Error in obtenerTodosLosUsuarios function - ' . $ex);
        }
    }

    public function agregarNuevoCoche($params)
    {
        $this->db->insert('automobiles', $params);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function obtenerTodosLosUsuarios()
    {
        try {
            return $this->db->get('usuario')->result_array();
        } catch (Exception $ex) {
            throw new Exception('Usuario model : Error in obtenerTodosLosUsuarios function - ' . $ex);
        }
    }

    public function obtenerTodosLosUsuariosUsers()
    {
        try {
            return $this->db->get_where('usuario', array('id_role' => 3))->result_array();
        } catch (Exception $ex) {
            throw new Exception('Usuario model : Error in obtenerTodosLosUsuarios function - ' . $ex);
        }
    }

    public function obtenerTodosLosRoles()
    {
        try {
            return $this->db->get('roles')->result_array();
        } catch (Exception $ex) {
            throw new Exception('Usuario model : Error in obtenerTodosLosRoles function - ' . $ex);
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

    public function get_automobiles($id)
    {
        try {
            return $this->db->get_where('automobiles', array('id' => $id))->row_array();
        } catch (Exception $ex) {
            throw new Exception('Usuario Model : Error in get_automobiles function - ' . $ex);
        }
    }

    public function delete_automobiles($id)
    {
        try {
            return $this->db->delete('automobiles', array('id' => $id));
        } catch (Exception $ex) {
            throw new Exception('Usuario model : Error in delete_automobiles function - ' . $ex);
        }
    }

    public function update_automobiles($id, $params)
    {
        try {
            $this->db->where('id', $id);
            return $this->db->update('automobiles', $params);
        } catch (Exception $ex) {
            throw new Exception('Usuario model : Error in update_automobiles function - ' . $ex);
        }
    }

    public function obtenerTodasLasUbicacionesDireccciones()
    {
        try {
            return $this->db->get('direcciones')->result_array();
        } catch (Exception $ex) {
            throw new Exception('Usuario model : Error in obtenerTodasLasUbicaciones function - ' . $ex);
        }
    }

    public function agregarDireccionWithUser($data)
    {
        return $this->db->insert('direccion', $data);
    }

    public function getpass()
    {

        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $password = "";
        //Reconstruimos la contraseña segun la longitud que se quiera
        for ($i = 0; $i < 8; $i++) {
            //obtenemos un caracter aleatorio escogido de la cadena de caracteres
            $password .= substr($str, rand(0, 62), 1);

        }

        return $password;

    }
}
