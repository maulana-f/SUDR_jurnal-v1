<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {
	public function index()
	{
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
		$this->load->view('v_pengembalian');
        $this->load->view('layout/footers');
	}

	public function entri()
	{
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
		$this->load->view('v_pengembalian_entri');
        $this->load->view('layout/footers');
	}
}
