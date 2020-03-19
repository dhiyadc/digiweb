<?php
class AboutUs extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tentang_model');
    }
    public function index()
    {
        $data['tentang'] = $this->tentang_model->getallstaff();
        $this->load->view('layout/header');
        $this->load->view('about-us', $data);
        $this->load->view('layout/footer');
    }

}