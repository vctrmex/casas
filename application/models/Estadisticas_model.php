<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Estadisticas_model
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

class Estadisticas_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getIngresosDelDiaActual()
    {
        $sql = $this->db->query("SELECT SUM(cantidad) as 'total_en_el_dia' FROM `aportaciones` WHERE fecharegistro >= '" . date('Y-m-d') . " 00:00:00'");
        $ret = $sql->row();
        return $ret->total_en_el_dia;
    }

    public function getIngresosUltimos15Dias()
    {
        $fecha_hace_15_dias = date("Y-m-d", strtotime(date('Y-m-d') . "- 15 days"));
        $sql = $this->db->query("SELECT SUM(cantidad) as 'total_en_el_dia' FROM `aportaciones` WHERE fecharegistro >= '" . $fecha_hace_15_dias . " 00:00:00'");
        $ret = $sql->row();
        return $ret->total_en_el_dia;
    }

    public function getCantidadVecinosQueAportaronHoy()
    {
        $sql = $this->db->query("SELECT DISTINCT id_usuario FROM `aportaciones` WHERE fecharegistro >= '" . date('Y-m-d') . " 00:00:00'");
        $total_vecinos_aportaron_hoy = 0;

        foreach ($sql->result_array() as $cantidad) {
            $total_vecinos_aportaron_hoy = $total_vecinos_aportaron_hoy + 1;
        }

        return $total_vecinos_aportaron_hoy;
    }

    public function getCantidadVecinosQueAportaron15Dias()
    {
        $fecha_hace_15_dias = date("Y-m-d", strtotime(date('Y-m-d') . "- 15 days"));
        $sql = $this->db->query("SELECT DISTINCT id_usuario FROM `aportaciones` WHERE fecharegistro >= '" . $fecha_hace_15_dias . " 00:00:00'");
        $total_vecinos_aportaron_hoy = 0;

        foreach ($sql->result_array() as $cantidad) {
            $total_vecinos_aportaron_hoy = $total_vecinos_aportaron_hoy + 1;
        }

        return $total_vecinos_aportaron_hoy;
    }

    public function getTotalVecinosQueAportaronAlMes()
    {
        $mes = date('m');
        $anio = date('Y');
        $sql = $this->db->query("SELECT DISTINCT id_usuario FROM `aportaciones` WHERE MONTH(fecharegistro) = " . $mes . " AND YEAR(fecharegistro) = " . $anio);

        $total_vecinos_aportaron_hoy = 0;

        foreach ($sql->result_array() as $cantidad) {
            $total_vecinos_aportaron_hoy = $total_vecinos_aportaron_hoy + 1;
        }

        return $total_vecinos_aportaron_hoy;
    }

    public function getCantidadViviendasRegistradas()
    {
      $sql = $this->db->query("SELECT COUNT(*) as 'total_viviendas' FROM `direccion`");
      $ret = $sql->row();
      return $ret->total_viviendas;
    }

    public function getCantidadVehiculosRegistrados()
    {
      $sql = $this->db->query("SELECT COUNT(*) as 'total_autos' FROM `automobiles`");
      $ret = $sql->row();
      return $ret->total_autos;
    }

    // ------------------------------------------------------------------------

}

/* End of file Estadisticas_model.php */
/* Location: ./application/models/Estadisticas_model.php */