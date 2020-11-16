<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_users extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    function list_users()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;

        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM user_ho WHERE akses = 'user_g' AND (
                nama LIKE '%$keyword%'
                OR email LIKE '%$keyword%')
                ORDER BY nama ASC";
            $count_all = $this->db->query($query)->num_rows();
            $data_tabel = $this->db->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT * FROM user_ho WHERE akses = 'user_g' ORDER BY nama ASC";
            $count_all = $this->db->query($query)->num_rows();
            $data_tabel = $this->db->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $labelnm = '<label id="labelnm_' . $hasil->id_user . '">' . $hasil->nama . '</label>';
            $labelem = '<label id="labelem_' . $hasil->id_user . '">' . $hasil->email . '</label>';
            $row = array();
            $row[] = $no++;
            $row[] = '<input class="form-group" id="nama_' . $hasil->id_user . '" type="hidden" value="' . $hasil->nama . '">' . $labelnm;
            $row[] = '<input class="form-group" id="email_' . $hasil->id_user . '" type="hidden" value="' . $hasil->email . '">' . $labelem;
            $row[] = '<button class="btn btn-warning btn-xs" id="btn_edit_' . $hasil->id_user . '" onclick="func_edit(' . $hasil->id_user . ')"><i class="ace-icon fa fa-edit bigger-60"></i></button>
            <button class="btn btn-danger btn-xs" id="btn_del_' . $hasil->id_user . '" onclick="func_del(' . $hasil->id_user . ')"><i class="ace-icon fa fa-trash bigger-60"></i></button>
            <button class="btn btn-primary btn-xs" style="display:none;" id="btn_save_' . $hasil->id_user . '" onclick="func_save(' . $hasil->id_user . ')"><i class="ace-icon fa fa-save bigger-60"></i></button>
            <button class="btn btn-default btn-xs" style="display:none;" id="btn_can_' . $hasil->id_user . '" onclick="func_can(' . $hasil->id_user . ')"><i class="ace-icon fa fa-times bigger-60"></i></button>
            <span id="spin_load_' . $hasil->id_user . '"></span>';
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

    function update_users()
    {
        $id_user = $this->input->post('id_user');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');

        $data = [
            'nama' => $nama,
            'email' => $email,
        ];
        $this->db->where('id_user', $id_user);
        return $this->db->update('user_ho', $data);
    }

    function add_usr()
    {
        $nama = $this->input->post('in_name');
        $email = $this->input->post('in_email');
        $this->db->where('nama',$nama);
        $c_nama = $this->db->get('user_ho')->num_rows();
        if ($c_nama != 0) {
            return FALSE;
        } else {
            $data = [
                'nama' => $nama,
                'email' => $email
            ];
            return $this->db->insert('user_ho', $data);
        }
    }
    function del_usr()
    {
        $id_user = $this->input->post('id_user');
        $this->db->where('id_user', $id_user);
        return $this->db->delete('user_ho');
        // var_dump($email.$nama);
    }
}
