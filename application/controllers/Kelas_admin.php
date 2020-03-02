<?php

class Kelas_admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
		$this->load->library('form_validation');
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
    }

    public function index()
    {
        $data['kelas'] = $this->Kelas_model->getAllClass();
        $this->load->view('kelas_admin/index',$data);
    }

    public function create_form()
    {
        $this->load->view('kelas_admin/create_class');
    }

    public function create() {   
        $this->form_validation->set_rules('judul','Title','required');
        $this->form_validation->set_rules('text','Description','required');
        $this->form_validation->set_rules('path_gambar','Image','required');
		
        if($this->form_validation->run() == FALSE) {
            $this->load->view('kelas_admin/create_class');
        }
        else {
        	$this->Kelas_model->createClass();
            redirect('kelas_admin');
        }     
    }

    public function delete($id)
    {
        $this->Kelas_model->deleteClass($id);
        redirect('kelas_admin');
    }

    public function update_form($id)
    {
        $data['kelas'] = $this->Kelas_model->getClassById($id);
        $this->load->view('kelas_admin/update_class',$data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('judul','Title','required');
        $this->form_validation->set_rules('text','Description','required');
		
        if($this->form_validation->run() == FALSE) {
            $data['kelas'] = $this->Kelas_model->getClassById($id);
            $this->load->view('kelas_admin/update_class',$data);
        }
        else { 
            $this->Kelas_model->updateClass($id);
            redirect('kelas_admin/detail_class/' . $id);
        }
    }

    public function detail_class($id)
    {
        $data['kelas'] = $this->Kelas_model->getClassById($id);
        $this->load->view('kelas_admin/detail_class',$data);
    }
}