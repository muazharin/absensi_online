
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Login extends CI_Model
{

    public function usercheck()
    {

        $user = $this->input->post('username', true);
        $password = md5($this->input->post('pass', true));
        $this->db->where('username', $user);
        $this->db->where('password', $password);
        return $this->db->get('user_ho', 1);
    }
}
