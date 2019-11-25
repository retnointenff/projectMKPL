<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Izin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_cuti');
        $this->load->helper(array('form', 'url'));
        
    }
    public function header(){
        if ($this->session->userdata('jabatan')== 'HRD'){
            $data['izin'] = $this->M_cuti->getUnapproveIzin();
            $this->load->view('header/header',$data);
        }elseif ($this->session->userdata('koperasi') == 'Anggota'){
            $this->load->view('header/headerK');
        }
    }
    public function cuti() {
        $cuti['nik'] = $this->session->userdata('nik');
        if (isset($_POST['ajukan'])) {
            $cuti['dari'] = $this->input->post('dari');
            $cuti['sampai'] = $this->input->post('sampai');
            $cuti['ambil'] = $this->input->post('ambil');
            $cuti['masuk'] = $this->input->post('masuk');
            $cuti['jenis'] = $this->input->post('jenis');
            $cuti['sisa'] = $this->input->post('sisa');
            $cuti['total'] = $this->input->post('total');
            $this->M_cuti->addCuti($cuti);
            // $this->M_cuti->addCuti($cuti);
            $where = array('nik' => $cuti['nik']);
            $data = array ('cuti' => $cuti['sisa']);
            $this->M_cuti->updateCutiKaryawan($data, $where);
        }
        $data['cuti'] = $this->M_cuti->getCuti($cuti['nik']);
        $this->header();
        $this->load->view('izin_cuti', $data);
    }
    public function khusus(){
        $khusus['nik'] = $this->session->userdata('nik');
        if (isset($_POST['ajukan'])) {
            $khusus['tgl'] = $this->input->post('tgl');
            $khusus['jam'] = $this->input->post('jam');
            $khusus['jenis'] = $this->input->post('jenis');
            $khusus['ket'] = $this->input->post('ket');
            $this->M_cuti->addKhusus($khusus);
        }
        $data['khusus'] = $this->M_cuti->getKhusus($khusus['nik']);
        $this->header();
        $this->load->view('izin_khusus', $data);
    }
    public function keluar(){
        $keluar['nik'] = $this->session->userdata('nik');
        if (isset($_POST['ajukan'])) {
            $keluar['tgl'] = $this->input->post('tgl');
            $keluar['keluar'] = $this->input->post('keluar');
            $keluar['jenis'] = $this->input->post('jenis');
            $keluar['kembali'] = $this->input->post('kembali');
            $keluar['ket'] = $this->input->post('ket');
            $this->M_cuti->addKeluar($keluar);
            // $this->M_cuti->addKeluar($keluar);
        }
        $data['keluar'] = $this->M_cuti->getKeluar($this->session->userdata('nik'));
        $this->header();
        $this->load->view('izin_keluar', $data);
    }
    public function deleteCuti($kd_cuti) {
        $kd = array('kd_cuti' => $kd_cuti);
        $this->M_cuti->deleteCuti($kd);
        
        $cuti['nik'] = $this->session->userdata('nik');

        $data['cuti'] = $this->M_cuti->getCuti($cuti['nik']);
        $this->header();
        $this->load->view('izin_cuti', $data);
    }
    public function deleteKhusus($kd_izin) {
        $kd = array('kd_izin' => $kd_izin);
        $this->M_cuti->deleteKhusus($kd);
        $khusus['nik'] = $this->session->userdata('nik');
        $data['khusus'] = $this->M_cuti->getKhusus($khusus['nik']);
        $this->header();
        $this->load->view('izin_khusus', $data);
    }
    public function deleteKeluar($kd_keluar) {
        $kd = array('kd_keluar' => $kd_keluar);
        $this->M_cuti->deleteKeluar($kd);
        $keluar['nik'] = $this->session->userdata('nik');
        $data['keluar'] = $this->M_cuti->getKeluar($keluar['nik']);
        $this->header();
        $this->load->view('izin_keluar', $data);
    }
}