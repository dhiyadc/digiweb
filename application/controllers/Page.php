<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{

    public function index(){
        //Controller Home
        $this->load->view('layout/header');
        $this->load->view('pricing');
        $this->load->view('layout/footer');
    }
    
}