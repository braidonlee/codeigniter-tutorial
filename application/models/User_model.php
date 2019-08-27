<?php
class User_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function register($enc_password)
    {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'zipcode' => $this->input->post('zipcode'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
        ];
        return $this->db->insert('users', $data);
    }

    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('users');

        if ($result->num_rows() == 1)
        {
            return $result->row(0)->id;
        }
        return FALSE;
    }

    public function check_username_exists($username)
    {
        $query = $this->db->get_where('users', ['username' => $username]);
        return empty($query->row_array());
    }
}