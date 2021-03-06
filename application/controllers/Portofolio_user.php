<?php
class Portofolio_user extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Portofolio_user_model');
        $this->load->model('homepage_database');

    }

    public function index()
    {
        $data['judul']='Portofolio';
        $data['portofolio']=$this->Portofolio_user_model->getAllPortofolio();
        $data['porto_count'] = count($this->homepage_database->getPortofolios());
        $data['kategori']=$this->Portofolio_user_model->getAllKategori();

        $this->load->view('portofolio_user/portofolio_user' , $data);
    }

    public function URead_porto($id){
        $data['judul']='Portofolio';
        $data['portofolio'] = $this->Portofolio_user_model->getPortobyID($id);
        $this->load->view('portofolio_user/readporto_user' , $data);
    }

    public function PortobyKategori($kategori)
    {
        $data['judul']='Portofolio';
        
        $data['portofolio']=$this->Portofolio_user_model->getAllPortofolio();
        $data['kategori']=$this->Portofolio_user_model->getAllKategori();
        $data['port_kategori']=$this->Portofolio_user_model->getPortoKategori($kategori);
        $data['count'] = count($this->Portofolio_user_model->getPortoKategori($kategori));
        $this->session->set_flashdata('kategori','Maaf, portofolio di kategori ini belum tersedia.');

        $this->load->view('portofolio_user/portofolio_kategori' , $data);
    }

}