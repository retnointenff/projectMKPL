<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gaji extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_karyawan');
        $this->load->model('M_gaji');
        $this->load->model('M_cuti');
        $this->load->library('pdf');
        $this->load->helper('url');
    }
    public function header() {
        $data['izin'] = $this->M_cuti->getUnapproveIzin();
        $this->load->view('header/header', $data);
    }
    public function detailGaji($nik) {
        $gajiKry = $this->M_gaji->getGaji($nik)->row_array(); 
        $t_rmh = 0.15 * $gajiKry['gaji'];
        $t_trans = 0.1 * $gajiKry['gaji'];
        $t_istri = 0.15 * $gajiKry['gaji'];
        $t_anak = 0.1 * $gajiKry['gaji'];
        $dataGaji = array(
            'jabatan' => 1000000,
            'perumahan' => $t_rmh,
            'transport' => $t_trans,
            'istri' => $t_istri,
            'anak' => $t_anak);
        $where = array('nik' => $nik);
        $this->M_gaji->updateGaji($dataGaji, $where);

        $data['desk'] = ['NIK', 'Nama', 'Gaji', 'Medical', 'Over Time', 'Tunjangan Jabatan', 'Tunjangan Perumahan',
        'Tunjangan Transportasi', 'Tunjangan Istri', 'Tunjangan Anak', 'Tunjangan Kebijakan', 'Penyesuaian', 'T H R',
        'Total', 'Potongan Jamsostek', 'Potongan BPJS', 'Potongan Koperasi', 'Denda Keterlambatan', 'Potongan Cuti',
        'Take Home Pay'];

        $tot = $this->M_gaji->hitungTotal($nik);
        $dt = array('total' => $tot['total']);
        $this->M_gaji->updateGaji($dt, $where);

        $hsl = $this->M_gaji->hitungGaji($nik);
        $dtt = array('take' => $hsl['take']);
        $this->M_gaji->updateGaji($hsl, $where);

        $gaji = $this->M_gaji->getGaji($nik)->row_array();
        $kry = $this->M_karyawan->get($nik);
        $data['gaji'] = array_values($gaji);
        $data['kry'] = [$kry['nik'], $kry['nama']]; 

        $this->header();
        $this->load->view('hrd/detailGaji', $data);
    }
    
}
