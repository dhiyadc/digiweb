<?php

class Kelas extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
    }

    public function index()
    {
        $data['kelas'] = $this->Kelas_model->getAllClass();
        $this->load->view('kelas/index',$data);
    }

    public function daftar_form($id)
    {
        $idclass['id'] = $id;
        $this->load->view('kelas/daftar',$idclass);
    }

    public function daftar($idclass)
    {
        $this->Kelas_model->daftar($idclass);
        $this->session->set_flashdata('flash','Data telah dikirimkan. Mohon menunggu kabar selanjutnya dari kami. Terima kasih');
		redirect('kelas');
    }
}