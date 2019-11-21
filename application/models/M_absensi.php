<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class M_absensi extends CI_Model
{
    public function tampil_data(){ 
        $this->db->select('nik, COUNT(nik) as absensi');
        $this->db->group_by('nik', 'ASC');
        $this->db->select('tgl, COUNT(tgl) as absensi');
        $this->db->group_by('nik', 'ASC');
        $this->db->select('nama, COUNT(nama) as absensi');
        $this->db->group_by('nama', 'ASC');
        $this->db->select('cabang, COUNT(cabang) as absensi');
        $this->db->group_by('cabang', 'ASC');
        $this->db->select('departemen, COUNT(departemen) as absensi');
        $this->db->group_by('departemen', 'ASC');
        $this->db->select('jabatan, COUNT(jabatan) as absensi');
        $this->db->group_by('jabatan', 'ASC');
        return $this->db->get('absensi');
    }
    public function tampilkan_data($nik){ 
        $this->db->limit(1);
        $this->db->select('*');
        $this->db->from('absensi');
        $this->db->where('nik', $nik);
        return $this->db->get();
    }
    public function isi_absensi($nik){
        $this->db->group_by('tgl', 'ASC');
        $this->db->select('*');
        $this->db->from('absensi');
        $this->db->where('nik', $nik);
        $query = $this->db->get();
        return $query->result();
    }
    public function getCetak($nik){
        $this->db->select('karyawan.nik,karyawan.nama,karyawan.jabatan,karyawan.departemen,absensi.telat');
        $this->db->from('karyawan');
        $this->db->JOIN('absensi', 'karyawan.nik = absensi.nik' );
        $this->db->where('karyawan.nik', $nik);
        $this->db->order_by('tgl', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
    public function delete(){
        $this->db->from('absensi'); 
        $this->db->truncate();
        return ;
    }
}