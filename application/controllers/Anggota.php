<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('M_Anggota');
    }

	public function index()
	{
		$data['anggota'] = $this->M_Anggota->get_all();

        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
		$this->load->view('v_anggota', $data);
        $this->load->view('layout/footers');
	}

	public function entri()
	{
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
		$this->load->view('v_anggota_entri');
        $this->load->view('layout/footers');
	}

	public function edit($id)
	{
		$data['anggota'] = $this->M_Anggota->get_by_id($id);

		$this->load->view('layout/headers');
		$this->load->view('layout/navigation');
		$this->load->view('v_anggota_edit', $data);
		$this->load->view('layout/footers');
	}

	public function submit()
	{
		$data = array(
			'anggota_kode' => $this->input->post('anggota_kode', TRUE),
			'anggota_nama' => $this->input->post('anggota_nama', TRUE),
			'anggota_alamat' => $this->input->post('anggota_alamat', TRUE),
			'anggota_nohp' => $this->input->post('anggota_nohp', TRUE),
			'anggota_jk' => $this->input->post('anggota_jk', TRUE)
		);
		
		if ($this->M_Anggota->insert($data)) {
			$this->session->set_flashdata("msg", "<div class='alert alert-success'>Data Anggota Berhasil Disimpan</div>");
		} else {
			$this->session->set_flashdata("msg", "<div class='alert alert-danger'>Data Anggota Gagal Disimpan</div>");
		}
		
		redirect('anggota');
	}

	public function submitedit()
	{
		$anggota_id = $this->input->post('anggota_id', TRUE);
		$data = array(
			'anggota_nama' => $this->input->post('anggota_nama', TRUE),
			'anggota_alamat' => $this->input->post('anggota_alamat', TRUE),
			'anggota_nohp' => $this->input->post('anggota_nohp', TRUE),
			'anggota_jk' => $this->input->post('anggota_jk', TRUE)
		);
		
		if ($this->M_Anggota->update($anggota_id, $data)) {
			$this->session->set_flashdata("msg", "<div class='alert alert-success'>Data Anggota Berhasil Diupdate</div>");
		} else {
			$this->session->set_flashdata("msg", "<div class='alert alert-danger'>Data Anggota Gagal Diupdate</div>");
		}
		
		redirect('anggota');
	}

	public function delete($id)
	{
		if ($this->M_Anggota->delete($id)) {
			$this->session->set_flashdata("msg", "<div class='alert alert-success'>Data Anggota Berhasil Dihapus</div>");
		} else {
			$this->session->set_flashdata("msg", "<div class='alert alert-danger'>Data Anggota Gagal Dihapus</div>");
		}
		
		redirect('anggota');
	}
}
