<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_log extends CI_Model {

    private $table = 'logs';

    // Simpan log baru
    public function simpan($user_id, $action) {
        $data = [
            'user_id'  => $user_id,
            'action'   => $action,
            'log_date' => date('Y-m-d H:i:s') 
        ];
        return $this->db->insert($this->table, $data);
    }

    // Ambil semua log
    public function get_all() {
        return $this->db->order_by('log_date', 'DESC')
                        ->get($this->table)
                        ->result();
    }

    // Ambil log berdasarkan user_id
    public function get_by_user($user_id) {
        return $this->db->where('user_id', $user_id)
                        ->order_by('log_date', 'DESC')
                        ->get($this->table)
                        ->result();
    }

    // Cari log berdasarkan keyword di kolom 'action'
    public function search($keyword) {
        return $this->db->like('action', $keyword)
                        ->order_by('log_date', 'DESC')
                        ->get($this->table)
                        ->result();
    }

    // (Opsional) Hapus semua log
    public function delete_all() {
        return $this->db->empty_table($this->table);
    }
}