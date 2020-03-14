<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
		// Load database
		$this->load->model('homepage_database');
	}

    public function index(){
        //Controller Home
        $this->load->view('layout/header');
        $data['blog'] = $this->homepage_database->getBlogs();
		$data['portofolio'] = $this->homepage_database->getPortofolios();
		$data['tentang'] = $this->homepage_database->getTentang();
        $data['kelas'] = $this->homepage_database->getKelas();
        $data['rating'] = $this->homepage_database->getRatingbyID();
        $this->load->view('home', $data);
        $this->load->view('layout/footer');
    }
    
}
