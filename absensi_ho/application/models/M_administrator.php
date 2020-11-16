<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_administrator extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    function last_seen()
    {
        $id_user = $this->input->post('id_user');
        $data = [
            'last_seen' => date('Y-m-d H:i:s')
        ];
        $this->db->where('id_user', $id_user);
        $query = $this->db->update('user_ho', $data);
        return $query;
    }
    function changePass()
    {
        $id_user = $this->input->post('id_user');
        $pb = md5($this->input->post('pb'));
        $data = [
            'password' => $pb
        ];
        $this->db->where('id_user', $id_user);
        $query = $this->db->update('user_ho', $data);
        return $query;
    }
}
