<?php
class Portofolio_user extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Portofolio_model');
    }
    public function index()
    {
        $data['judul']='Portofolio';
        $data['portofolio']=$this->Portofolio_model->getAllPortofolio();

        $this->load->view('portofolio_user' , $data);
    }

}