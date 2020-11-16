<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Track extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_msal_in') != TRUE) {
            redirect('login');
        }
        $this->load->model('M_track');
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/leftside');
        $this->load->view('vw_track');
        $this->load->view('template/footer');
    }

    public function list_users_track()
    {
        $data = $this->M_track->list_users_track();
        echo json_encode($data);
    }

    public function setMark()
    {
        $data = $this->M_track->setMark();
        echo json_encode($data);
    }
}
