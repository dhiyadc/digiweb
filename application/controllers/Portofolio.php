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

        $this->load->view('portofolio/portofolio_view' , $data);
    }

    public function createPortofolio()
    {
        $data['judul']='Create Portofolio';
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            $data['kategori']= $this->Portofolio_model->getAllKategori();
            $this->load->view('portofolio/create_portofolio',  $data);
            
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
    public function ReadPortofolio($id)
    {
        $data['judul']='Portofolio';
        $data['portofolio']=$this->Portofolio_model->getPortobyID($id);
        $this->load->view('portofolio/read_portofolio', $data);
    }
    public function UpdatePortofolio($id)
    {
        $data['judul']='Update Portofolio';
        $data['portofolio']= $this->Portofolio_model->getPortobyID($id);    
        
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            $data['kategori']= $this->Portofolio_model->getAllKategori();
            $this->load->view('portofolio/update_portofolio', $data);
            
        }else{
            $this->Portofolio_model->updatePortofolio($id);

            $this->session->set_flashdata('flash','di update');
            redirect('Portofolio');
        }
    }


}