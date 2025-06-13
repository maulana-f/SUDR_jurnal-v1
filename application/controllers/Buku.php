<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('M_Buku');
    }

	public function index()
	{
        $data['buku'] = $this->M_Buku->get_all();

        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
		$this->load->view('v_buku', $data);
        $this->load->view('layout/footers');
	}

	public function entri()
	{
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
		$this->load->view('v_buku_entri');
        $this->load->view('layout/footers');
	}

    public function edit($id)
	{
        $data['buku'] = $this->M_Buku->get_by_id($id);

        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
		$this->load->view('v_buku_edit', $data);
        $this->load->view('layout/footers');
	}

	public function submit()
	{
        // upload gambar
		$this->load->library('upload');

        function upload_gambar($field_name) {
            $CI =& get_instance();

            // Jika file kosong / tidak diupload
            if (!isset($_FILES[$field_name]) || $_FILES[$field_name]['error'] === 4) {
                return null;
            }

            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['file_name']     = md5(uniqid(microtime(true) . rand(), true));
            $config['overwrite']     = false;

            $CI->upload->initialize($config);
            if (!$CI->upload->do_upload($field_name)) {
                $CI->session->set_flashdata('error', $CI->upload->display_errors());
                redirect('buku');
            }
            return $CI->upload->data('file_name');
        }
        // Proses upload dua gambar
        $gambar1 = upload_gambar('data_buku_gambar_1');
        $gambar2 = upload_gambar('data_buku_gambar_2');

        // Ambil data dari form
        $data = array(
            'data_buku_nomor'     => $this->input->post('data_buku_nomor', TRUE),
            'data_buku_judul'     => $this->input->post('data_buku_judul', TRUE),
            'data_buku_kategori'  => $this->input->post('data_buku_kategori', TRUE),
            'data_buku_pengarang' => $this->input->post('data_buku_pengarang', TRUE),
            'data_buku_penerbit'  => $this->input->post('data_buku_penerbit', TRUE),
            'data_buku_tahun'     => $this->input->post('data_buku_tahun', TRUE),
            'data_buku_stok'      => $this->input->post('data_buku_stok', TRUE),
            'data_buku_gambar_1'  => $gambar1,
            'data_buku_gambar_2'  => $gambar2,
            'data_buku_tgl_input' => date('Y-m-d H:i:s')
        );

        // Simpan ke database lewat model
        $this->M_Buku->insert($data);
        $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses!</strong> Data berhasil disimpan.</div>");
        redirect('buku');
	}

    public function submitedit(){
        // upload gambar
        $this->load->library('upload');

        function upload_gambar($field_name) {
            $CI =& get_instance();

            // Jika file kosong / tidak diupload
            if (!isset($_FILES[$field_name]) || $_FILES[$field_name]['error'] === 4) {
                return null;
            }
            
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['file_name']     = md5(uniqid(microtime(true) . rand(), true));
            $config['overwrite']     = false;

            $CI->upload->initialize($config);
            if (!$CI->upload->do_upload($field_name)) {
                $CI->session->set_flashdata('msg', $CI->upload->display_errors());
                redirect('buku');
            }
            return $CI->upload->data('file_name');
        }

        $current_gambar1 = $this->input->post('current_data_buku_gambar_1', TRUE);
        $current_gambar2 = $this->input->post('current_data_buku_gambar_2', TRUE);

        // Proses upload dua gambar
        $gambar1 = upload_gambar('data_buku_gambar_1');
        $gambar2 = upload_gambar('data_buku_gambar_2');

        // Hapus lama jika upload baru berhasil
        if ($gambar1) {
            if (!empty($current_gambar1) && file_exists('./uploads/' . $current_gambar1)) {
                unlink('./uploads/' . $current_gambar1);
            }
        }

        if ($gambar2) {
            if (!empty($current_gambar2) && file_exists('./uploads/' . $current_gambar2)) {
                unlink('./uploads/' . $current_gambar2);
            }
        }

        // Ambil data dari form
        $data = array(
            'data_buku_nomor'     => $this->input->post('data_buku_nomor', TRUE),
            'data_buku_judul'     => $this->input->post('data_buku_judul', TRUE),
            'data_buku_kategori'  => $this->input->post('data_buku_kategori', TRUE),
            'data_buku_pengarang' => $this->input->post('data_buku_pengarang', TRUE),
            'data_buku_penerbit'  => $this->input->post('data_buku_penerbit', TRUE),
            'data_buku_tahun'     => $this->input->post('data_buku_tahun', TRUE),
            'data_buku_stok'      => $this->input->post('data_buku_stok', TRUE),
            'data_buku_gambar_1'  => $gambar1 ?? $current_gambar1,
            'data_buku_gambar_2'  => $gambar2 ?? $current_gambar2,
            'data_buku_tgl_input' => date('Y-m-d H:i:s')
        );

        $id = $this->input->post('data_buku_id', TRUE);

        // Update ke database lewat model
        if ($this->M_Buku->update($id, $data)) {
            $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses!</strong> Data berhasil diperbarui.</div>");
            redirect('buku');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong> Gagal memperbarui data.</div>");
            redirect('buku/edit/'.$id);
        }   
    }

    public function delete($id){
        // get the current images
        $buku = $this->M_Buku->get_by_id($id);
        unlink('./uploads/' . $buku->data_buku_gambar_1);
        unlink('./uploads/' . $buku->data_buku_gambar_2);

        $delete = $this->M_Buku->delete($id);
        if ($delete) {
            $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses!</strong> Data berhasil dihapus.</div>");
            redirect('buku');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong> Gagal menghapus data.</div>");
            redirect('buku');
        }
    }
    
}
