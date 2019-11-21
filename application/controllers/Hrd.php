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
    public function cetak_pdf($nik){
        $data = $this->M_absensi->getCetak($nik);
        $c_pdf = $this->pdf->getInstance();
        $c_pdf->AliasNbPages();
        $c_pdf = new FPDF('P', 'mm', 'A4');
        $c_pdf->AddPage();
        $c_pdf->header('Arial');
        $c_pdf->setTopMargin(15);
        $c_pdf->setLeftMargin(12);
        $c_pdf->Cell(50);
        $c_pdf->SetFont('Arial','B', 18);
        $c_pdf->Cell(190,10,'PT. PYXIS ULTIMATE SOLUTION', 0,1, 'L');
        $c_pdf->SetFont('Arial', 'B', 17);
        $c_pdf->Cell(60);
		$c_pdf->Cell(190,7, 'EVERYONES TECHNOLOGY', 0,1,'L');
        $c_pdf->SetFont('Arial', 'B', 8);
        $c_pdf->Cell(5);
		$c_pdf->Cell(90,6, 'Jl.Tambora 15 Malang 05146, Ph.(62-341)550246 55028, Fax.(62-341)550247, E-mail:corporate@pyxis.net, Website:www.thepyxis.net',0,1, 'L');
		$c_pdf->SetFont('Arial', 'B',7);
        $c_pdf->Line(15, 35, 220-25, 35);
        $c_pdf->Line(15, 35, 220-25, 35);
        $c_pdf->Line(15, 35, 220-25, 35);
        $c_pdf->Line(15, 35, 220-25, 35);

        $c_pdf->Cell(10,8, '', 0,1);
        $c_pdf->Cell(60);
        $c_pdf->SetFont('Arial', 'B', 14);
        $c_pdf->Cell(230,7,'Laporan Absensi Karyawan',0,1, 'L');
        $c_pdf->Line(72, 47, 170-32, 47);

        $c_pdf->Cell(10,8, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial','', 12);
            $c_pdf->Cell(25,5, 'NIK',0,0);  
            $c_pdf->Cell(25,5, ': '. $data[0]->nik,0,0);
                
        $c_pdf->Cell(10,8, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', '12');
            $c_pdf->Cell(25,5, 'Nama',0,0);  
            $c_pdf->Cell(25,5, ': '. $data[0]->nama,0,0);
           
        $c_pdf->Cell(10,8, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', '12');
            $c_pdf->Cell(25,5, 'Jabatan',0,0);  
            $c_pdf->Cell(25,5, ': '. $data[0]->jabatan,0,0);
             
        $c_pdf->Cell(10,8, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', '12');
            $c_pdf->Cell(25,5, 'Departemen',0,0);  
            $c_pdf->Cell(25,5, ': '. $data[0]->departemen,0,0);
        

        $c_pdf->Line(15, 90, 220-25, 90);
        $c_pdf->Line(15, 90, 220-25, 90);
        $c_pdf->Line(15, 90, 220-25, 90);

        $c_pdf->Cell(10,14, '', 0,1);
        $c_pdf->Cell(60);
        $c_pdf->SetFont('Arial', 'B', 14);
        $c_pdf->Cell(230,7,'Detail Absensi Selama Sebulan',0,1, 'L');
        $c_pdf->Line(72, 100, 170-24, 100);

        $telatRaw = $data[0]->telat;
        $c_pdf->Cell(10,8, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', '12');
            $c_pdf->Cell(25,5, 'Total Telat',0,0);  
            $c_pdf->Cell(25,5, ': '. $totalTelat = strval($telatRaw).' menit',0,0);      
        $c_pdf->Cell(10,8, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', '12');
            $c_pdf->Cell(25,5, 'Total Denda',0,0);  
            $c_pdf->Cell(25,5, ': '. $totalDenda = "Rp. " . strval($telatRaw*1000),0,0);
                
        if ($telatRaw > 30) {
            $sp = "Surat Peringatan 2";
        } else if ($telatRaw >= 0 ) {
            $sp = "Tidak Mendapat Surat Peringatan";
        } else {
            $sp = "Surat Peringatan 1";
        }
        $c_pdf->Cell(10,8, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', '12');
            $c_pdf->Cell(25,5, 'Peringatan',0,0);  
            $c_pdf->Cell(25,5, ': '. $sp,0,0);
       
        $c_pdf->Line(15, 138, 220-25, 138);
        $c_pdf->Line(15, 138, 220-25, 138);
        $c_pdf->Line(15, 138, 220-25, 138);

        $c_pdf->Cell(10,14, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', '12');
        $c_pdf->Cell(200,7, 'Keterangan     : ',0,1, 'L');

        $c_pdf->Cell(10,8, '', 0,1);
        $c_pdf->Line(15, 182, 220-25, 182);
        $c_pdf->Line(15, 182, 220-25, 182);
        $c_pdf->Line(15, 182, 220-25, 182);

        $c_pdf->Cell(10,30, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', '12');
        $c_pdf->Cell(200,7, 'Malang ...../ ..... / ..... ',0,1, 'L');
        $c_pdf->Cell(10,15,'',0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial','','10');
       
            $c_pdf->Cell(65,5, 'HRD MANAGER',0,0);  
            $c_pdf->Cell(65,5, 'HEAD DEPT.',0,0);
            $c_pdf->Cell(65,5, 'EMPLOYED CONCERNED',0,0);
            
        $c_pdf->Cell(10,40,'',0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial','','12');
            $c_pdf->Cell(62,5, '(................................)',0,0); 
            $c_pdf->Cell(62,5, '(................................)',0,0);
            $c_pdf->Cell(62,5, '(................................)',0,0);
          
        $c_pdf->Cell(0,0,'',0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial','','12');
        $c_pdf->Line(15, 258, 220-25, 258);
        $c_pdf->Line(15, 258, 220-25, 258);
        $c_pdf->Line(15, 258, 220-25, 258);
        $c_pdf->Cell(10,16,'',0,1);
        $c_pdf->Cell(60);
        $c_pdf->SetFont('Arial','','12');
        $c_pdf->Cell(200,7, '@copy 2019-www.pyxis.net',0,1, 'L');

        $c_pdf->Output();
    }
    public function hapusdata() {
        $this->M_absensi->delete();
        $this->header();
        $data['absensi'] = $this->M_absensi->tampil_data()->result();
        $this->load->view('hrd/data_absensi', $data);
    }
}
