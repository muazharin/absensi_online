<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_msal_in') != TRUE) {
            redirect('login');
        }
        $this->load->model('M_administrator');
        $this->db_wfo = $this->load->database('db_wfo', true);
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/leftside');
        $this->load->view('vw_administrator');
        $this->load->view('template/footer');
    }

    function last_seen()
    {
        $data = $this->M_administrator->last_seen();
        echo json_encode($data);
    }
    
    function changePass()
    {
        $data = $this->M_administrator->changePass();
        echo json_encode($data);
    }
}
