<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('M_absen');
	}
	public function index()
	{
		// $this->load->view('template/header');
		// $this->load->view('template/leftside');
		// $this->load->view('vw_absen_index');
		// $this->load->view('template/footer');
		$this->load->view('vw_absen_user');
	}

	function nama_user()
	{
		$query = "SELECT id_user, nama FROM user_ho WHERE akses = 'user_g' ORDER BY nama ASC";
		$data = $this->db->query($query)->result();
		echo json_encode($data);
	}

	function cekabsen()
	{
		$data = $this->M_absen->cekabsen();
		echo json_encode($data);
	}

	function absen_pagi()
	{
		$data = $this->M_absen->absen_pagi();
		echo json_encode($data);
	}
	function absen_istirahat()
	{
		$data = $this->M_absen->absen_istirahat();
		echo json_encode($data);
	}
	function absen_selesai_istirahat()
	{
		$data = $this->M_absen->absen_selesai_istirahat();
		echo json_encode($data);
	}
	function absen_pulang()
	{
		$data = $this->M_absen->absen_pulang();
		echo json_encode($data);
	}
	function absen_izin()
	{
		$data = $this->M_absen->absen_izin();
		echo json_encode($data);
	}
	function absen_sakit()
	{
		$data = $this->M_absen->absen_sakit();
		echo json_encode($data);
	}
	function absen_cuti()
	{
		$data = $this->M_absen->absen_cuti();
		echo json_encode($data);
	}
	function laporan()
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
	function list_user()
	{
		$data = $this->M_absen->list_user();
		echo json_encode($data);
	}
	function print_lap()
	{
		$data['tgl'] = $this->uri->segment(3);
		$data['data_absen'] = $this->M_absen->get_data_absen($this->uri->segment(3));
		$this->load->view('vw_lap_absen', $data);
	}
}
