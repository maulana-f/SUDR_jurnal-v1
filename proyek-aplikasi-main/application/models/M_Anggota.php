<?php 
    class M_Anggota extends CI_Model{
        function __construct(){
            parent::__construct();
        }

        // Simpan data anggota baru
        public function insert($data) {
            return $this->db->insert('anggota', $data);
        }

        // Ambil semua data anggota
        public function get_all() {
            return $this->db->get('anggota')->result();
        }

        // Ambil satu data anggota berdasarkan ID
        public function get_by_id($id) {
            return $this->db->get_where('anggota', ['anggota_id' => $id])->row();
        }

        // Update data anggota berdasarkan ID
        public function update($id, $data) {
            $this->db->where('anggota_id', $id);
            return $this->db->update('anggota', $data);
        }

        // Hapus data anggota berdasarkan ID
        public function delete($id) {
            $this->db->where('anggota_id', $id);
            return $this->db->delete('anggota');
        }
    }
?>