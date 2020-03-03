<?php

class Portofolio extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Portofolio_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul']='Portofolio';
        $data['portofolio']=$this->Portofolio_model->getAllPortofolio();

        $this->load->view('portofolio_view' , $data);
    }
    public function createPortofolio()
    {
        $data['judul']='Create Portofolio';
        
        $this->form_validation->set_rules('image', 'Image', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('create_portofolio', $data);
            
        }else{
            $this->Portofolio_model->createPortofolio();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('Portofolio');
        }
    }
    public function DeletePortofolio($id)
    {
        $this->Portofolio_model->delPortofolio($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('Portofolio');
    }


}