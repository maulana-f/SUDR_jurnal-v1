<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('M_Petugas');
    }

	public function index()
	{
		$data['petugas'] = $this->M_Petugas->get_all();

        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
		$this->load->view('v_petugas', $data);
        $this->load->view('layout/footers');
	}

	public function entri()
	{
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
		$this->load->view('v_petugas_entri');
        $this->load->view('layout/footers');
	}

	public function edit($id)
	{
		$data['petugas'] = $this->M_Petugas->get_by_id($id);

		$this->load->view('layout/headers');
		$this->load->view('layout/navigation');
		$this->load->view('v_petugas_edit', $data);
		$this->load->view('layout/footers');
	}

	public function submit()
	{
		$data = array(
			'login_nama' => $this->input->post('login_nama', TRUE),
			'username' => $this->input->post('username', TRUE),
			'password' => $this->input->post('password', TRUE),
		);
		
		if ($this->M_Petugas->insert($data)) {
			$this->session->set_flashdata("msg", "<div class='alert alert-success'>Data petugas Berhasil Disimpan</div>");
		} else {
			$this->session->set_flashdata("msg", "<div class='alert alert-danger'>Data petugas Gagal Disimpan</div>");
		}
		
		redirect('petugas');
	}

	public function submitedit()
	{
		$id_login = $this->input->post('id_login', TRUE);
		$password = $this->input->post('password', TRUE);

		$data = array(
			'login_nama' => $this->input->post('login_nama', TRUE),
			'username' => $this->input->post('username', TRUE),
		);

		if (!empty($login_password)) {
			$data['password'] = $password; 
		}
		
		if ($this->M_Petugas->update($id_login, $data)) {
			$this->session->set_flashdata("msg", "<div class='alert alert-success'>Data petugas Berhasil Diupdate</div>");
		} else {
			$this->session->set_flashdata("msg", "<div class='alert alert-danger'>Data petugas Gagal Diupdate</div>");
		}
		
		redirect('petugas');
	}

	public function delete($id)
	{
		if ($this->M_Petugas->delete($id)) {
			$this->session->set_flashdata("msg", "<div class='alert alert-success'>Data petugas Berhasil Dihapus</div>");
		} else {
			$this->session->set_flashdata("msg", "<div class='alert alert-danger'>Data petugas Gagal Dihapus</div>");
		}
		
		redirect('petugas');
	}
}
