<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Review extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_review');
    }
    

    public function index()
    {
        $data['Judul'] = "Review Jurnal";
        $data['journals'] = $this->M_review->get_all();
         $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
        $this->load->view('v_review', $data); 
         $this->load->view('layout/footers');
    }

    
    
}