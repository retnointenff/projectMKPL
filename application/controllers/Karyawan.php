<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller {
    protected $col = 0; 
    protected $y0;
    function __construct(){
		parent::__construct();		
        $this->load->model('M_karyawan');
        $this->load->model('M_absensi');
        $this->load->model('M_cuti');
        $this->load->library('pdf');
        $this->load->helper('url');
    }
    public function header() {
        $this->load->view('header/headerK');
    }
    public function index() {
        $telat = $this->M_absensi->tampilkan_data($this->session->userdata('nik'))->result();
        $data['diri'] = array_values($telat);
        $this->header();
        $this->load->view('karyawan', $data);
    }
    public function absensi() {
        $nik = $this->session->userdata('nik');
        $data['absensi'] = $this->M_absensi->tampilkan_data($nik)->result();
        $this->header();
        $this->load->view('data_absensi', $data);
    }
    public function detail_absensi($nik) {
        $data['detail_absensi'] = $this->M_absensi->isi_absensi($nik);
        $this->header();
        $this->load->view('detail_absensi', $data);
    }
    public function edit_profil() {
        $nik = $this->session->userdata('nik');
        $data['profil'] = $this->M_karyawan->getProfilUser($nik);
        $data['karyawan'] = $this->M_karyawan->getData()->result();
        $this->header();
        $this->load->view('edit_profil', $data);
    }
    public function proses_edit() {
        $nik = $this->session->userdata('nik');
        $jabatan = $this->session->userdata('jabatan');
        $departemen = $this->session->userdata('departemen');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $cabang = $this->session->userdata('cabang');
        $kontrak = $this->session->userdata('kontrak');
        $tempat = $this->input->post('tempat');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $password = md5($this->input->post('password'));
        $phone= $this->input->post('phone');
        $tgl_masuk = $this->session->userdata('tgl_masuk');
        $tgl_keluar = $this->session->userdata('tgl_keluar');
        $data = array(
            'nama' => $nama,
            'email' => $email,
            'alamat' => $alamat,
            'tempat' => $tempat,
            'tgl_lahir' => $tgl_lahir,
            'password' => $password,
            'phone' => $phone
        );
        $where= array('nik' => $nik );
        $this->M_karyawan->updateAkun($where, $data, 'karyawan');
        redirect('karyawan/edit_profil');
    }
    public function cuti() {
        $nik = $this->session->userdata('nik');
        $data['cuti'] = $this->M_cuti->getCuti($nik);
        $data['karyawan'] = $this->M_karyawan->getData()->result();
        $this->header();
        $this->load->view('izin_cuti', $data);
    }
    public function keluar() {
        $nik = $this->session->userdata('nik');
        $data['keluar'] = $this->M_cuti->getKeluar($nik);
        $this->header();
        $this->load->view('izin_keluar', $data);
    }
    public function khusus() {
        $nik = $this->session->userdata('nik');
        $data['khusus'] = $this->M_cuti->getKhusus($nik);
        $this->header();
        $this->load->view('izin_khusus', $data);
    }
}
