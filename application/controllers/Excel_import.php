<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_import extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->Model('M_absensi');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	public function header() {
        $this->load->view('header/header');
    }
	public function index() {
		$data['num_rows'] = $this->db->get('absensi')->num_rows();
		$this->header();
        $data['absensi'] = $this->M_absensi->tampil_data()->result();
        $this->load->view('hrd/data_absensi', $data); 
	}
	public function import_data() {
		$config = array(
			'upload_path'   => FCPATH.'upload/',
			'allowed_types' => 'xls|csv'
		);
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')) {
			$data = $this->upload->data();
			@chmod($data['full_path'], 0777);

			$this->load->library('Spreadsheet_Excel_Reader');
			$this->spreadsheet_excel_reader->setOutputEncoding('CP1251');

			$this->spreadsheet_excel_reader->read($data['full_path']);
			$sheets = $this->spreadsheet_excel_reader->sheets[0];
			error_reporting(0);
			
			$data_excel = array();
			for ($i = 2; $i <= $sheets['numRows']; $i++) {
				if ($sheets['cells'][$i][1] == '') break;
				$data_excel[$i - 1]['pin']    = $sheets['cells'][$i][1];
				$data_excel[$i - 1]['nik']   = $sheets['cells'][$i][2];
				$data_excel[$i - 1]['nama'] = $sheets['cells'][$i][3];
				$data_excel[$i - 1]['tgl'] = date('m/d/Y', $sheets['cells'][$i][4], -25569 * 86400 / 86400 + 25569);
				$data_excel[$i - 1]['jam']   = $sheets['cells'][$i][5];
				$data_excel[$i - 1]['sn_mesin'] = $sheets['cells'][$i][6];
				$data_excel[$i - 1]['nm_mesin'] = $sheets['cells'][$i][7];
				$data_excel[$i - 1]['verivikasi']    = $sheets['cells'][$i][8];
				$data_excel[$i - 1]['mode']   = $sheets['cells'][$i][9];
				$data_excel[$i - 1]['mode_up'] = $sheets['cells'][$i][10];
				$data_excel[$i - 1]['cabang']    = $sheets['cells'][$i][11];
				$data_excel[$i - 1]['departemen']   = $sheets['cells'][$i][12];
				$data_excel[$i - 1]['jabatan']   = $sheets['cells'][$i][13];
				$data_excel[$i - 1]['telat'] = 0 ;
			}
			$this->db->insert_batch('absensi', $data_excel);
			redirect('excel_import');
		}
	}
}
