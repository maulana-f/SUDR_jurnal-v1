<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_review extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('reviews')->result(); 
    }

    public function ubah_status($id, $status)
{
    $this->db->where('id', $id);
    $this->db->update('journals', ['Status' => $status]);
}
public function get_pending() {
    return $this->db->get_where('journals', ['Status' => 'Pending'])->result();
}
}