<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{

    public function index(){
        //Controller Home
        $this->load->view('layout/header');
        $this->load->view('contact');
        $this->load->view('layout/footer');
    }

    
}