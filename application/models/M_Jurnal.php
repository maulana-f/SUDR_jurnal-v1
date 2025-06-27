<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Jurnal extends CI_Model
{
      function __construct(){
            parent::__construct();
        }

    public function get_all()
    {
          $this->db->select('logs.*, users.username');
        $this->db->from('logs');
        $this->db->join('users', 'users.id = logs.user_id', 'left');
        $this->db->order_by('log_date', 'DESC');
        return $this->db->get('journals')->result(); 
    }

    public function ubah_status($id, $status)
{
    $this->db->where('id', $id);
    $this->db->update('journals', ['Status' => $status]);
}

}
