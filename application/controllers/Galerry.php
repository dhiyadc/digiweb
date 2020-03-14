<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galerry extends CI_Controller{

    public function index(){
        //Controller Home
        $this->load->view('layout/header');
        $this->load->view('galerry');
        $this->load->view('layout/footer');
    }
    
}