<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_log extends CI_Model {

    public function get_all() {
        // Kalau kamu punya tabel users, bisa join untuk ambil nama user
        $this->db->select('logs.*, users.username');
        $this->db->from('logs');
        $this->db->join('users', 'users.id = logs.user_id', 'left');
        $this->db->order_by('log_date', 'DESC');
        return $this->db->get()->result();
    }

    public function insert_log($username, $action) {
        $data = [
            'username' => $username,
            'action' => $action,
            'log_date' => date('Y-m-d H:i:s')
        ];
        return $this->db->insert('logs', $data);
    }
}