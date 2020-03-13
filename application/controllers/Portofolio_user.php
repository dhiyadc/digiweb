<?php
class Portofolio_user extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Portofolio_user_model');
    }

    public function index()
    {
        $data['judul']='Portofolio';
        $data['portofolio']=$this->Portofolio_user_model->getAllPortofolio();

        $this->load->view('portofolio_user/portofolio_user' , $data);
    }

    public function URead_porto($id){
        $data['judul']='Portofolio';
        $data['portofolio'] = $this->Portofolio_user_model->getPortobyID($id);
        $this->load->view('portofolio_user/readporto_user' , $data);
    }

}