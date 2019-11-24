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
    public function printPdf($nik){
        $data = $this->M_gaji->getDataPdf($nik);
        $kry = $this->M_gaji->getGaji($nik)->row_array();
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
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', '12');
        foreach ($data as $item) {
            $c_pdf->Cell(25,5, 'Nama',0,0);  
            $c_pdf->Cell(25,5, ': '. $data[0]->nama,0,0);
        }

        $dt = new DateTime(null, new DateTimeZone('Asia/Jakarta')); 
        $c_pdf->Cell(10,10, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial','', 12);
        foreach ($data as $item) {
            $c_pdf->Cell(25,5, 'Date',0,0);
            $c_pdf->cell(25,5, ': '.$dt->format('Y-m-d'),0,0);
        }

        $c_pdf->Cell(10,10, '', 0,1);
        $c_pdf->Cell(60);
        $c_pdf->SetFont('Arial', 'B', 14);
        $c_pdf->Cell(230,7,'SLIP GAJI DAN TUNJANGAN',0,1, 'L'); 

        $c_pdf->Cell(10,8, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', 'B', 12);
        foreach ($data as $item) {
            $c_pdf->Cell(15,5, 'NO',1,0,'C');  
            $c_pdf->Cell(80,5, 'DESCRIPTION',1,0,'C');
            $c_pdf->Cell(60,5, 'AMOUNT(Rupiah)',1,0,'C');
            
        }
        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
      
            $c_pdf->Cell(15,5, '1',1,0, 'C');  
            $c_pdf->Cell(80,5, 'Gaji ',1,0);
            $c_pdf->Cell(60,5, ''. number_format($kry['gaji'], 0 , "." , "."),1,0, 'R');
   
        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
            $c_pdf->Cell(15,5, '2',1,0,'C');  
            $c_pdf->Cell(80,5, 'Medical',1,0);
            $c_pdf->Cell(60,5, ''. number_format($kry['medical'], 0, ".","."),1,0,'R');
            
        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
            $c_pdf->Cell(15,5, '3',1,0,'C');  
            $c_pdf->Cell(80,5, 'OverTime',1,0);
            $c_pdf->Cell(60,5, ''. number_format($kry['overtime'],0,".","."),1,0,'R');

        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
            $c_pdf->Cell(15,5, '4',1,0,'C');  
            $c_pdf->Cell(80,5, 'Tunjangan Jabatan',1,0);
            $c_pdf->Cell(60,5, ''. number_format($kry['jabatan'],0,".","."),1,0,'R');    
        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
            $c_pdf->Cell(15,5, '5',1,0,'C');  
            $c_pdf->Cell(80,5, 'Tunjangan Perumahan 15%',1,0);
            $c_pdf->Cell(60,5, ''. number_format($kry['perumahan'],0,".","."),1,0,'R');

        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
            $c_pdf->Cell(15,5, '6',1,0,'C');  
            $c_pdf->Cell(80,5, 'Tunjangan Transport 10%',1,0);
            $c_pdf->Cell(60,5, ''. number_format($kry['transport'],0,".","."),1,0,'R');

        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
            $c_pdf->Cell(15,5, '7',1,0,'C');  
            $c_pdf->Cell(80,5, 'Tunjangan Istri 15%',1,0);
            $c_pdf->Cell(60,5, ''. number_format($kry['istri'],0,".","."),1,0,'R');

        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
            $c_pdf->Cell(15,5, '8',1,0,'C');  
            $c_pdf->Cell(80,5, 'Tunjangan Anak 10%',1,0);
            $c_pdf->Cell(60,5, ''. number_format($kry['anak'],0,".","."),1,0,'R');

        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
            $c_pdf->Cell(15,5, '9',1,0,'C');  
            $c_pdf->Cell(80,5, 'Tunjangan Kebijakan',1,0);
            $c_pdf->Cell(60,5, ''. number_format($kry['kebijakan'],0,".","."),1,0,'R');

        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
            $c_pdf->Cell(15,5, '10',1,0,'C');  
            $c_pdf->Cell(80,5, 'Penyesuaian Gaji',1,0);
            $c_pdf->Cell(60,5, ''. number_format($kry['penyesuaian'],0,".","."),1,0,'R');
            
        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
            $c_pdf->Cell(15,5, '11',1,0,'C');  
            $c_pdf->Cell(80,5, 'THR',1,0);
            $c_pdf->Cell(60,5, ''. number_format($kry['thr'],0,".","."),1,0,'R');

        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', 'B', 10);
            $c_pdf->Cell(15,5, '',1,0);  
            $c_pdf->Cell(80,5, 'TOTAL',1,0,'R');
            $c_pdf->Cell(60,5, '' . number_format($kry['total'],0,".","."),1,0,'R');

        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
            $c_pdf->Cell(15,5, '',1,0);  
            $c_pdf->Cell(80,5, 'Potongan Iuran Jamsostek',1,0,'C');
            $c_pdf->Cell(60,5, ''. number_format($kry['jamsostek'],0,".","."),1,0,'R');

        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
            $c_pdf->Cell(15,5, '',1,0);  
            $c_pdf->Cell(80,5, 'Potongan Iuran BPJS Kesehatan',1,0,'C');
            $c_pdf->Cell(60,5, ''. number_format($kry['bpjs'],0,".","."),1,0,'R');
            
        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
            $c_pdf->Cell(15,5, '',1,0);  
            $c_pdf->Cell(80,5, 'Potongan Iuran Koperasi + Pinjaman',1,0,'C');
            $c_pdf->Cell(60,5, ''. number_format($kry['koperasi'],0,".","."),1,0,'R');
        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
            $c_pdf->Cell(15,5, '',1,0);  
            $c_pdf->Cell(80,5, 'Denda Keterlambatan',1,0,'C');
            $c_pdf->Cell(60,5, ''. number_format($kry['denda'],0,".","."),1,0,'R');

        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
            $c_pdf->Cell(15,5, '',1,0);  
            $c_pdf->Cell(80,5, 'Potongan Minus Cuti',1,0,'C');
            $c_pdf->Cell(60,5, ''. number_format($kry['cuti'],0,".","."),1,0,'R');

        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', 'B', 10);
            $c_pdf->Cell(15,5, '',1,0);  
            $c_pdf->Cell(80,5, 'Take Home Pay',1,0,'R');
            $c_pdf->Cell(60,5, ''. number_format($kry['take'],0,".","."),1,0,'R');

        $c_pdf->Cell(10,5, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', '', 10);
            $c_pdf->Cell(15,5, '',1,0);  
            $c_pdf->Cell(80,5, '',1,0);
            $c_pdf->Cell(60,5, '',1,0);
            
        $c_pdf->Cell(10,13, '', 0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial', 'B', 11);
            $c_pdf->Cell(20,5, 'Tanggal : ',0);  
            $c_pdf->Cell(80,5, '',0);
            $c_pdf->Cell(60,5, '',0);

        $c_pdf->Cell(10,32, '', 0,1);
        $c_pdf->Cell(17);
        $c_pdf->SetFont('Arial', '', 12);
            $c_pdf->Cell(67,5, 'Dibuat oleh,',0);  
            $c_pdf->Cell(67,5, 'Kasir',0);
            $c_pdf->Cell(67,5, 'Penerima',0);
            
        $c_pdf->Cell(10,40,'',0,1);
        $c_pdf->Cell(10);
        $c_pdf->SetFont('Arial','','12');
            $c_pdf->Cell(63,5, '(................................)',0,0); 
            $c_pdf->Cell(63,5, '(................................)',0,0);
            $c_pdf->Cell(63,5, '(................................)',0,0);
        $c_pdf->Output();
    }
    
}
