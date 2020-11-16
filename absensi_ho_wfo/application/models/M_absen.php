<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_absen extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function cekabsen()
    {
        $id = $this->input->post('id');
        $date_absen = date('Y-m-d');
        $query = "SELECT * FROM absensi_ho WHERE id_user = '" . $id . "' AND date_absen = '" . $date_absen . "'";
        $hasil = $this->db->query($query)->num_rows();
        $hasil1 = $this->db->query($query)->row();
        // var_dump($hasil);
        if ($hasil !== 0) {
            if ($hasil1->ket == 'WFO') {
                $data = [
                    'status' => true,
                    'pagi' => $hasil1->in_ket,
                    'pulang' => $hasil1->gohome_ket
                ];
            } else {
                $data = [
                    'status' => false,
                    'msg' => 'WFH'
                ];
            }
            return $data;
        } else {
            $data = [
                'status' => false,
                'msg' => ''
            ];
            return $data;
        }
    }
    function ipcheck()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    function absen_pagi()
    {
        $absen = $this->input->post('absen');
        $id_user = $this->input->post('id_user');
        $lat = $this->input->post('lat');
        $long = $this->input->post('long');
        $ip = $this->ipcheck();
        // var_dump($ip);
        $data = [
            'id_absen' => null,
            'id_user' => $id_user,
            'date_absen' => date('Y-m-d'),
            'in_time' => date('Y-m-d H:i:s'),
            'in_ket' => $absen,
            'in_ip' => $ip,
            'in_loc' => $lat . ',' . $long,
            'ket' => 'WFO'
        ];
        return $this->db->insert('absensi_ho', $data);
    }

    function absen_pulang()
    {
        $absen = $this->input->post('absen');
        $id_user = $this->input->post('id_user');
        $lat = $this->input->post('lat');
        $long = $this->input->post('long');
        $ip = $this->ipcheck();
        $data = [
            'gohome_time' => date('Y-m-d H:i:s'),
            'gohome_ket' => $absen,
            'gohome_ip' => $ip,
            'gohome_loc' => $lat . ',' . $long,
        ];
        $this->db->where('id_user', $id_user);
        $this->db->where('date_absen', date('Y-m-d'));
        return $this->db->update('absensi_ho', $data);
    }

    function list_karyawan()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;
        $date_absen = $this->input->post('date_absen');
        $date_absen = date_create($date_absen);
        $date_absen = date_format($date_absen, "Y-m-d");
        // $date_absen = "date_absen = '".$date_absen."'";

        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT a.nama, b.in_time FROM user_ho a, absensi_ho b WHERE a.id_user = b.id_user AND b.date_absen = '" . $date_absen . "' AND (nama LIKE '%$keyword%')
                ORDER BY id_absen DESC";
            $count_all = $this->db->query($query)->num_rows();
            $data_tabel = $this->db->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT a.nama, b.in_time FROM user_ho a, absensi_ho b WHERE a.id_user = b.id_user AND date_absen = '" . $date_absen . "' ORDER BY id_absen DESC";
            $count_all = $this->db->query($query)->num_rows();
            $data_tabel = $this->db->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row   = array();
            // $id = $hasil->id_absen;

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
        // var_dump($query); 
    }
    function list_user()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;

        $date_absen = date("Y-m-d");

        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT a.nama, b.* FROM user_ho a, absensi_ho b WHERE a.id_user = b.id_user AND b.ket = 'WFO' AND b.date_absen = '" . $date_absen . "' AND (a.nama LIKE '%$keyword%')
                ORDER BY b.id_absen DESC";
            $count_all = $this->db->query($query)->num_rows();
            $data_tabel = $this->db->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT a.nama, b.* FROM user_ho a, absensi_ho b WHERE a.id_user = b.id_user AND b.ket = 'WFO' AND b.date_absen = '" . $date_absen . "' ORDER BY b.id_absen DESC";
            $count_all = $this->db->query($query)->num_rows();
            $data_tabel = $this->db->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row   = array();
            // $id = $hasil->id_absen;
            $jam_masuk = date_create($hasil->in_time);
            $jam_masuk = date_format($jam_masuk, "H:i:s");
            $jam_pulang = date_create($hasil->gohome_time);
            $jam_pulang = date_format($jam_pulang, "H:i:s");

            $row[] = $hasil->nama;
            $row[] = $hasil->in_ket . "<br>" . $jam_masuk;
            $row[] = $hasil->gohome_ket . "<br>" . $jam_pulang;
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

    function get_data_absen($bulan)
    {
        $query = "SELECT nama FROM user_ho WHERE akses = 'user_g'";
        $data = $this->db->query($query)->result();
        return $data;
    }
}
