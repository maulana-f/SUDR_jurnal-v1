<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnal extends CI_Controller {

    public function __construct() {
        parent::__construct();

        
        $this->load->model('M_Jurnal');
    }

    public function index() {
        $data['journals'] = $this->M_Jurnal->get_all();
        
         $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
        $this->load->view('v_jurnal', $data);
         $this->load->view('layout/footers');
    }
}