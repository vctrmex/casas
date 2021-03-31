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

    public function getEgresosDelDiaActual()
    {
        $sql = $this->db->query("SELECT SUM(cantidad_egreso) as 'total_en_el_dia' FROM `egresos` WHERE fecha_egreso >= '" . date('Y-m-d') . " 00:00:00' AND status_egreso = 1");
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

    public function getEgresosUltimos15Dias()
    {
        $fecha_hace_15_dias = date("Y-m-d", strtotime(date('Y-m-d') . "- 15 days"));
        $sql = $this->db->query("SELECT SUM(cantidad_egreso) as 'total_en_el_dia' FROM `egresos` WHERE fecha_egreso >= '" . $fecha_hace_15_dias . " 00:00:00' AND status_egreso = 1");
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

    public function traerIngresosPorParametros($anio, $mes)
    {
        $sql = "SELECT * FROM `aportaciones` WHERE MONTH(fecharegistro) = $mes and YEAR(fecharegistro) = $anio";
        if($anio == 'Seleccione Año' || $mes == 'Seleccione Mes'){
            return null;
        }else{
            
            $query = $this->db->query($sql);
            return $query->result_array();
        } 
    }

    public function traerEgresosPorParametros($anio, $mes)
    {
        $sql = "SELECT * FROM `egresos` WHERE MONTH(fecha_egreso) = $mes and YEAR(fecha_egreso) = $anio AND status_egreso = 1";
        if($anio == 'Seleccione Año' || $mes == 'Seleccione Mes'){
            return null;
        }else{
            $query = $this->db->query($sql);
            return $query->result_array();
        } 
    }

    public function traerIngresosParaBalance()
    {
        $sql = "SELECT * FROM `aportaciones` WHERE MONTH(fecharegistro) = ".date('m');
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function traerEgresosParaBalanceDash()
    {
        $total = 0;
        $sql = "SELECT * FROM `egresos` WHERE MONTH(fecha_egreso) = ".date('m')." AND status_egreso = 1";
        $query = $this->db->query($sql);
        
        foreach ($query->result_array() as $egreso) {
            $total = $total + $egreso['cantidad_egreso'];
        }

        return $total;
    }

    public function traerIngresosParaBalanceDash()
    {
        $total = 0;
        $sql = "SELECT * FROM `aportaciones` WHERE MONTH(fecharegistro) = ".date('m');
        $query = $this->db->query($sql);

        foreach ($query->result_array() as $ingreso) {
            $total = $total + $ingreso['cantidad'];
        }

        return $total;
    }

    public function traerEgresosParaBalance()
    {
        $sql = "SELECT * FROM `egresos` WHERE MONTH(fecha_egreso) = ".date('m')." AND status_egreso = 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function sumaIngresoTotalMesActual()
    {
        $fecha = date("m");
        //$fecha = 2;
        $sql = $this->db->query("SELECT SUM(cantidad) as 'total_ingreso' FROM `aportaciones` WHERE MONTH(fecharegistro) = ".$fecha);
        $ret = $sql->row();
        return $ret->total_ingreso;
    }

    public function sumaEgresoTotalMesActual()
    {
        $fecha = date("m");
        //$fecha = 2;
        $sql = $this->db->query("SELECT SUM(cantidad_egreso) as 'total_egreso' FROM `egresos` WHERE MONTH(fecha_egreso) = ".$fecha);
        $ret = $sql->row();
        return $ret->total_egreso;
    }

    // ------------------------------------------------------------------------

}

/* End of file Estadisticas_model.php */
/* Location: ./application/models/Estadisticas_model.php */
