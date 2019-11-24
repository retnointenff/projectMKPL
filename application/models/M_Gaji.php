<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_gaji extends CI_Model
{
    public function updateGaji($data, $where)
    {
        $this->db->where($where);
        $this->db->update('gaji', $data);
    }
    
}
