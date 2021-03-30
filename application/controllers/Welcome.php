<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function subirDocs()
	{
		$reader = new PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$spreadsheet = $reader->load("CALLES.xlsx");
		$worksheet = $spreadsheet->getActiveSheet();
		//print_r($spreadsheet);
		$rows = [];
		foreach ($worksheet->getRowIterator() AS $row) {
			$cellIterator = $row->getCellIterator();
			$cellIterator->setIterateOnlyExistingCells(FALSE); // This loops through all cells,
			$cells = [];
			foreach ($cellIterator as $cell) {
				$cells[] = $cell->getValue();
			}
			$rows[] = $cells;
		}

		foreach ($rows as $direccion) {
			echo $direccion[0].'--'.$direccion[1].'--'.$direccion[2].'--'.$direccion[3].'<br>';

			$params = array(
				'id_direcciones' => null,
				'nombre_direcciones' => $direccion[0],
				'numeroint_direcciones' => $direccion[1],
				'numeroext_direcciones' => $direccion[2],
				'chat_direccion' => $direccion[3],
			);

			$this->Usuario_model->agregarDireccion($params);
		}
	}
}
