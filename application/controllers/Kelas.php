<?php

class Kelas extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
    }

    public function index()
    {
        $data['kategori'] = $this->Kelas_model->getKategori();
        $data['kelas'] = $this->Kelas_model->getAllClass();
        $this->load->view('kelas/index',$data);
    }

    public function daftar($idclass)
    {
        $this->Kelas_model->daftar($idclass);
        $this->session->set_flashdata('create','Data telah dikirimkan. Mohon menunggu kabar selanjutnya dari kami. Terima kasih');
		redirect('kelas');
    }

    public function kategori($id)
    {
        $data['kategori'] = $this->Kelas_model->getKategori();
        $data['kelas'] = $this->Kelas_model->getKelasByKategori($id);
        $data['count'] = $this->Kelas_model->countKelasByKategori($id);
        $this->session->set_flashdata('kategori','Maaf, layanan di kategori ini belum tersedia.');
        $this->load->view('kelas/kategori',$data);
    }
}