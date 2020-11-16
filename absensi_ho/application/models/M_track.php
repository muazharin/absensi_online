<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_track extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function list_users_track()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;
        $date_absen = $this->input->post('date_absen');
        $date_absen = date_create($date_absen);
        $date_absen = date_format($date_absen, "Y-m-d");

        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT a.nama, b.* FROM user_ho a, absensi_ho b WHERE a.id_user = b.id_user AND b.ket = 'WFH' AND b.date_absen = '" . $date_absen . "' AND (a.nama LIKE '%$keyword%')
                ORDER BY b.id_absen DESC";
            $count_all = $this->db->query($query)->num_rows();
            $data_tabel = $this->db->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT a.nama, b.* FROM user_ho a, absensi_ho b WHERE a.id_user = b.id_user AND b.ket = 'WFH' AND b.date_absen = '" . $date_absen . "' ORDER BY b.id_absen DESC";
            $count_all = $this->db->query($query)->num_rows();
            $data_tabel = $this->db->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row   = array();
            $row[] = $no++;
            $row[] = $hasil->nama;
            $data[] = $row;
        }
        $output = array(
            "draw"              => $_POST['draw'],
            "recordsTotal"      => $count_all,
            "recordsFiltered"   => $count_all,
            "data"              => $data,
        );
        return $output;
    }

    public function setMark()
    {
        $name_user = $this->input->post('name_user');
        $date_absen = $this->input->post('date_absen');
        $date_absen = date_format(date_create($date_absen),'Y-m-d');
        $radioB = $this->input->post('radioB');
        if ($radioB == 'in') {
            $opsi = 'b.in_loc';
        } else if ($radioB == 'rest') {
            $opsi = 'b.rest_loc';
        } else if ($radioB == 'done_rest') {
            $opsi = 'b.done_rest_loc';
        } else {
            $opsi = 'b.gohome_loc';
        }

        $query = "SELECT a.nama, b.id_user, $opsi as loc FROM user_ho a, absensi_ho b WHERE a.id_user = b.id_user AND b.date_absen = '" . $date_absen . "' AND a.nama = '" . $name_user . "'";
        return $this->db->query($query)->result_array();
        // var_dump($query);
    }
}
