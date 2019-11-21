<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hrd extends CI_Controller {
    protected $col = 0; 
    protected $y0;
    function __construct(){
		parent::__construct();		
        $this->load->model('M_karyawan');
        $this->load->model('M_absensi');
        $this->load->library('pdf');
        $this->load->helper('url');
    }
    public function header() {
        $this->load->view('header/header');
    }
    public function index() {
        $telat = $this->M_absensi->tampilkan_data($this->session->userdata('nik'))->result();
        $data['diri'] = array_values($telat);
        $this->header();
        $this->load->view('hrd', $data);        
    }
    public function karyawan() {
        $data['karyawan'] = $this->M_karyawan->getData()->result();
        $this->header();
        $this->load->view('hrd/data_karyawan', $data);
    }
    public function absensi() {
        $data['absensi'] = $this->M_absensi->tampil_data()->result();
        $this->header();
        $this->load->view('hrd/data_absensi', $data);
    }
    public function detail_absensi($nik) {
        $data['detail_absensi'] = $this->M_absensi->isi_absensi($nik);
        $this->header();
        $this->load->view('hrd/detail_absensi', $data);
    }
    public function edit_profil() {
        $nik = $this->session->userdata('nik');
        $data['profil'] = $this->M_karyawan->getProfilUser($nik);
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
        $password = $this->input->post('password');
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
        redirect('hrd/edit_profil');
    }
    public function edit_karyawan($nik) {
        $where= array('nik'=> $nik);
        $data['karyawan'] = $this->M_karyawan->getProfilKaryawan($where,'karyawan')->result();
        $this->header();
        $this->load->view('hrd/edit_karyawan',$data);
    }
    public function proses_Karyawan() {
        $nik = $this->input->post('nik');
        $jabatan = $this->input->post('jabatan');
        $departemen = $this->input->post('departemen');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $cabang = $this->input->post('cabang');
        $kontrak = $this->input->post('kontrak');
        $tempat = $this->input->post('tempat');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $password = $this->session->userdata('password');
        $phone= $this->input->post('phone');
        $tgl_masuk = $this->input->post('tgl_masuk');
        $tgl_keluar = $this->input->post('tgl_keluar');
        $data = array(
            'nik' => $nik,
            'jabatan' => $jabatan,
            'departemen' => $departemen,
            'nama' => $nama,
            'email' => $email,
            'cabang' => $cabang,
            'kontrak' => $kontrak,
            'alamat' => $alamat,
            'tempat' => $tempat,
            'tgl_lahir' => $tgl_lahir,
            'tgl_masuk' => $tgl_masuk,
            'tgl_keluar' => $tgl_keluar,
            'phone' => $phone
        );
        $where= array('nik'=>$nik);
        $this->M_karyawan->updateKaryawan($where, $data, 'karyawan');
        redirect('hrd/karyawan');
    }
    public function deleteKaryawan($nik) {
        $this->M_karyawan->deleteKaryawan($nik);
        redirect('hrd/karyawan');
    }
}
