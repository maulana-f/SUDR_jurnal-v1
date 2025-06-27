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
        $data['journals'] = $this->M_review->get_pending();
         $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
        $this->load->view('v_review', $data); 
         $this->load->view('layout/footers');
    }

   public function ubah_status()
{
    $id = $this->input->post('id');
    $status = $this->input->post('status');

    $this->M_review->ubah_status($id, $status);

// log aktivitas
$log = [
  'user_id' => $this->session->userdata('user_id'),
  'action' => 'review',
  'log_date' => date('Y-m-d H:i:s')
];
$this->db->insert('logs', $log);
    redirect('review'); // reload halaman
}

    
    
}