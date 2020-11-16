<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }
    public function index()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
        $this->form_validation->set_rules('pass', 'Password', 'required|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('vw_login');
        } else {
            $valid = $this->M_login->usercheck();
            if ($valid->num_rows() > 0) {
                $data = $valid->row_array();
                $id = $data['id_user'];
                $user = $data['username'];
                $nama = $data['nama'];
                $email = $data['email'];
                $pass = $data['password'];
                $last_seen = $data['last_seen'];
                $sesdata = [
                    'id_admin' => $id,
                    'username' => $user,
                    'nama' => $nama,
                    'email' => $email,
                    'password' => $pass,
                    'last_seen' => $last_seen,
                    'logged_msal_in' => true
                ];
                $this->session->set_userdata($sesdata);
                redirect('laporan');
            } else {
                // echo '<script>alert("Username atau password salah!")</script>';
                $this->session->set_flashdata('msg','Username atau password salah');
                redirect('login');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('logged_msal_in');
        session_destroy();
        redirect('login');
    }
}
