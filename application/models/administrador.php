<?php if (!defined('BASEPATH')) exit('no existe pagina');

class Administrador extends CI_model {

  public function __construct(){

    parent::__construct();

  }

  public function add($data = null){

    $this->db->insert('usuario',$data);


}

  public function validate($user = null, $pass = null){

    $this->db->select('*');
    $query = $this->db->where('password',md5($pass));
    $query = $this->db->where('mail',$user);
    $query = $this->db->get('usuario');
    return $query->num_rows();

  }



}