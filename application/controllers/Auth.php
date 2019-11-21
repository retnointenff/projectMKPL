<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct ()
    {
        parent::__construct();
        $this->load->model('M_karyawan');
        $this->load->library('form_validation');
    }
    public function index()
    {
        if (!isset($_SESSION['jabatan'])) {
            $this->load->view('login');    
        } elseif ($_SESSION['jabatan'] == 'HRD'){
            redirect('hrd');
        } elseif ($_SESSION['jabatan'] == 'Karyawan'){
            redirect('karyawan');
        }
    }
    public function login()
    {
        $nik = $this->input->post('nik');
        $password = $this->input->post('password');

        $user = $this->M_karyawan->get($nik);
        if (empty($user)) {
            $this->session->set_flashdata('message', 'Belum terdaftar');
            redirect('auth');
        } else {
            if (md5($password) == $user['pin']) {
                $session = array('nik' => $user['nik'] , 'jabatan' => $user['jabatan'], 'koperasi' => $user['koperasi']);
                $this->session->set_userdata($session);
                if ($user['jabatan'] == 'HRD') {
                    redirect('hrd');
                }
                else if ($user['jabatan'] == 'Karyawan') {
                    redirect('karyawan');
                }
            } else {
                $this->session->set_flashdata('error', 'Password anda tidak sesuai');
                redirect('auth');
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
