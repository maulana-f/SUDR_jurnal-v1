<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('M_Login');
    }

	public function index()
	{
		$this->load->view('login');
	}

	public function auth(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$user = $this->M_Login->login($username, $password);
		if($user){
			redirect('home');
		}else{
			redirect('welcome');
		}
	}
}
