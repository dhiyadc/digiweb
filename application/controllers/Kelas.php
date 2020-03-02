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
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('nohp','No.HP','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('instansi','Instansi','required');
		
        if($this->form_validation->run() == FALSE) {
            $id['id_class'] = $idclass;
            $this->load->view('kelas/daftar',$id);
        }
        else {
        	$this->Kelas_model->daftar($idclass);
			redirect('kelas/detail_class/'. $idclass);  
        }
    }
}