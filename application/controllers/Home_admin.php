<?php

class Home_admin extends CI_Controller {
    public function index()
    {
        $this->load->view('_partials/header_admin');
        $this->load->view('admin/index');
        $this->load->view('_partials/footer_admin');
    }
    public function login()
    {
        $this->load->view('admin/admin_view');
    }
}