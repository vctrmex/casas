<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Ingreso
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

class Ingreso extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
      $data['title'] = 'Villa Quietud';
      $this->template->load('homeDashboard', 'administrador/ingresosView', $data);
    }

}

/* End of file Ingreso.php */
/* Location: ./application/controllers/Ingreso.php */
