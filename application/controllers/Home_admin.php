<?php

class Home_admin extends CI_Controller {
    public function index()
    {
        $this->load->view('admin/login_admin');
    }
    public function login()
    {
        $this->load->view('admin/admin_view');
    }
}