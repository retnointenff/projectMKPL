<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_gaji extends CI_Model
{
    public function updateGaji($data, $where)
    {
        $this->db->where($where);
        $this->db->update('gaji', $data);
    }
    public function getGaji($nik)
    {
        return $this->db->get_where('gaji', ['nik' => $nik]);
    }
    public function hitungTotal($nik)
    {
        $hasil = $this->db->query("SELECT SUM(gaji+medical+overtime+jabatan+perumahan+transport+istri+anak+kebijakan+penyesuaian+thr) as total FROM gaji WHERE nik = " . $nik);
        return $hasil->row_array();
    }
    public function hitungGaji($nik)
    {
        $hasil = $this->db->query("SELECT SUM(total-jamsostek-bpjs-koperasi-denda-cuti) as take FROM gaji WHERE nik = " . $nik);
        return $hasil->row_array();
    }
}
