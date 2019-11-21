<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_karyawan extends CI_Model
{
    public function get($nik)
    {
        return $this->db->get_where('karyawan', ['nik' => $nik])->row_array();
    }
    public function getData()
    {
        return $this->db->get('karyawan');
    }
    public function getProfilUser($nik)
    {
        $this->db->select('*'); //memilih semua field
        $this->db->from('karyawan'); //memilih tabel
        $this->db->where('nik', $nik);
        $query = $this->db->get();
        return $query->result();
    }
    public function updateAkun($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function getProfilKaryawan($where,$table){
        return $this->db->get_where($table,$where);
    }
    public function updateKaryawan($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function deleteKaryawan($nik)
    {
        $this->db->where('nik', $nik);
        $this->db->delete('karyawan');
    }
}