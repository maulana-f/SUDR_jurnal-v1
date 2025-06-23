<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_upload');
    }

    public function index() {
         $this->load->view('layout/headers');
          $this->load->view('layout/navigation');
        $this->load->view('v_upload');
          $this->load->view('layout/footers');
    }

    public function simpan() {
        $judul = $this->input->post('judul');
        $abstrak = $this->input->post('abstrak');
        $kategori = $this->input->post('kategori');
        $status = 'Pending'; // default

        // Upload File
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf|docx|doc';
        $config['file_name'] = time() . '_' . $_FILES['file']['name'];

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $data_file = $this->upload->data();
            $file_name = $data_file['file_name'];

            $data = [
                'Judul'    => $judul,
                'Abstrak'  => $abstrak,
                'tanggal_upload'   => $file_name,
                'Kategori' => $kategori,
                'Status'   => $status
            ];

            $this->M_upload->simpan($data);
            redirect('upload'); // kembali ke form upload
        } else {
            echo "Gagal upload: " . $this->upload->display_errors();
        }
    }
}