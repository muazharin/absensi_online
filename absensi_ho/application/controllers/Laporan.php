<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_msal_in') != TRUE) {
            redirect('login');
        }
        $this->load->model('M_absen');
        $this->db_wfo = $this->load->database('db_wfo', true);
    }

    public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/leftside');
		$this->load->view('vw_laporan_excel');
		$this->load->view('template/footer');
    }
    function list_karyawan()
	{
		$data = $this->M_absen->list_karyawan();
		echo json_encode($data);
    }
    function list_karyawan_wfo()
	{
		$data = $this->M_absen->list_karyawan_wfo();
		echo json_encode($data);
    }
    function list_summary()
	{
		$data = $this->M_absen->list_summary();
		echo json_encode($data);
    }
    function print_lap()
	{
		$data['tgl'] = $this->uri->segment(3);
		$data['data_absen'] = $this->M_absen->get_data_absen($this->uri->segment(3));
		$this->load->view('vw_lap_absen', $data);
	}
}
