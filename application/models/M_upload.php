<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_upload extends CI_Model {

    public function simpan($data) {
        return $this->db->insert('journals', $data);
    }
}