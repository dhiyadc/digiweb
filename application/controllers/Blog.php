<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{

    public function index(){
        //Controller Home
        $this->load->view('layout/header');
        $this->load->view('blog/singleblog');
        $this->load->view('layout/footer');
    }

    public function blogdetail(){
        $this->load->view('layout/header');
        $this->load->view('blog/blog');
        $this->load->view('layout/footer');
    }
    
}