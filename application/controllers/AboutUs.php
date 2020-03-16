<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends CI_Controller{

    public function index(){
        //Controller Home
        $this->load->view('layout/header');
        $this->load->view('about-us');
        $this->load->view('layout/footer');
    }
    
}