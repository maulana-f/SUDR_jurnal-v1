<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

    public function __construct() {
        parent::__construct();

        
        $this->load->model('M_log');
    }

    public function index() {
        $data['logs'] = $this->M_log->get_all(); 
        
         $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
        $this->load->view('v_log', $data);
         $this->load->view('layout/footers');
    }
}