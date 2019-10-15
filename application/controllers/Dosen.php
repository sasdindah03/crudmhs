<?php

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['dosen'] = $this->Dosen_model->getAllDosen();
        if( $this->input->post('keyword') ) {
            $data['dosen'] = $this->Dosen_model->cariDataDosen();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('dosen/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data';

        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric|exact_length[9]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('dosen/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Dosen_model->tambahDataDosen();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('dosen');
        }
    }

    public function hapus($id)
    {
        $this->Dosen_model->hapusDataDosen($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('dosen');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Dosen';
        $data['dosen'] = $this->Dosen_model->getDosenById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('dosen/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Dosen';
        $data['dosen'] = $this->Dosen_model->getDosenById($id);
        $data['prodi'] = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Planologi', 'Teknik Pangan', 'Teknik Lingkungan'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric|exact_length[9]');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('dosen/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dosen_model->ubahDataDosen();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('dosen');
        }
    }

}
