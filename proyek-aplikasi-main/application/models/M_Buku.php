<?php 
    class M_Buku extends CI_Model{
        function __construct(){
            parent::__construct();
        }

        // simpan data buku baru
        public function insert($data) {
            $this->db->insert('data_buku', $data);
        }

        // Ambil semua data buku
        public function get_all() {
            return $this->db->get('data_buku')->result();
        }

        // Ambil satu data buku berdasarkan ID
        public function get_by_id($id) {
            return $this->db->get_where('data_buku', ['data_buku_id' => $id])->row();
        }

        // Update data buku berdasarkan ID
        public function update($id, $data) {
            $this->db->where('data_buku_id', $id);
            return $this->db->update('data_buku', $data);
        }

        // Hapus data buku berdasarkan ID
        public function delete($id) {
            $this->db->where('data_buku_id', $id);
            return $this->db->delete('data_buku');
        }
    }
?>