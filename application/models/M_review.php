<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_review extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('reviews')->result(); 
    }
}