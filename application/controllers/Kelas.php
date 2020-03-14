<?php

class Kelas extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
		$this->load->library('form_validation');
    }

    public function index()
    {
        $data['kelas'] = $this->Kelas_model->getAllClass();
        $this->load->view('kelas/index',$data);
    }

    public function detail_class($id)
    {
        $data['kelas'] = $this->Kelas_model->getClassById($id);
        $this->load->view('kelas/detail_class',$data);
    }

    public function daftar_form($idclass)
    {
        $id['id_class'] = $idclass;
        $this->load->view('kelas/daftar',$id);
    }

    public function daftar($idclass)
    {
        $this->Kelas_model->daftar($idclass);
        $this->session->set_flashdata('flash','Data telah dikirimkan. Mohon menunggu kabar selanjutnya dari kami. Terima kasih');
		redirect('kelas/detail_class/'. $idclass);
    }
}