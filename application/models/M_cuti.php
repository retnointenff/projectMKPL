<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_cuti extends CI_Model
{
    //Model cuti
    public function getCuti($nik)
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->join('cuti', 'karyawan.nik = cuti.nik');
        $this->db->where('cuti.nik', $nik);
        $query = $this->db->get();
        return $query->result();
    }
    public function addCuti($data){
        $this->db->insert('cuti', $data);
    }
    public function updateCutiKaryawan($data, $where)
    {
        $this->db->where($where);
        $this->db->update('karyawan', $data);
    }
    //Model izin khusus
    public function getKhusus($nik)
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->join('khusus', 'karyawan.nik = khusus.nik');
        $this->db->where('karyawan.nik', $nik);
        $query = $this->db->get();
        return $query->result();
    }
    public function addKhusus($data){
        $this->db->insert('khusus', $data);
    }

    //Model izin keluar
    public function getKeluar($nik)
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->join('keluar', 'karyawan.nik = keluar.nik');
        $this->db->where('karyawan.nik', $nik);
        $query = $this->db->get();
        return $query->result();
    }
    public function addKeluar($data){
        $this->db->insert('keluar', $data);
    }
    public function deleteCuti($id)
    {
        $this->db->delete('cuti', $id);
    }
    public function deleteKhusus($id)
    {
        $this->db->delete('khusus', $id);
    }
    public function deleteKeluar($id)
    {
        $this->db->delete('keluar', $id);
    }
}