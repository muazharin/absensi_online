<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_msal_in') != TRUE) {
            redirect('login');
        }
        $this->load->model('M_users');
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/leftside');
        $this->load->view('vw_users');
        $this->load->view('template/footer');
    }

    function list_users()
    {
        $data = $this->M_users->list_users();
        echo json_encode($data);
    }

    function update()
    {
        $data = $this->M_users->update_users();
        echo json_encode($data);
    }
    function add_usr()
    {
        $data = $this->M_users->add_usr();
        echo json_encode($data);
    }
    function del_usr()
    {
        $data = $this->M_users->del_usr();
        echo json_encode($data);
    }
}
