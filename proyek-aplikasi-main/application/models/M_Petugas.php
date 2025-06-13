<?php 
    class M_Petugas extends CI_Model{
        function __construct(){
            parent::__construct();
        }

        // Simpan data login baru
        public function insert($data) {
            return $this->db->insert('login', $data);
        }

        // Ambil semua data login
        public function get_all() {
            return $this->db->get('login')->result();
        }

        // Ambil satu data login berdasarkan ID
        public function get_by_id($id) {
            return $this->db->get_where('login', ['login_id' => $id])->row();
        }

        // Update data login berdasarkan ID
        public function update($id, $data) {
            $this->db->where('login_id', $id);
            return $this->db->update('login', $data);
        }

        // Hapus data login berdasarkan ID
        public function delete($id) {
            $this->db->where('login_id', $id);
            return $this->db->delete('login');
        }
    }
?>