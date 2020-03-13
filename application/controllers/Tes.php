<?php

class Tes extends CI_Controller {
    public function index()
    {
        $this->load->view('_partials/header_admin');
        $this->load->view('kelas_admin/create_class');
        $this->load->view('_partials/footer_admin');
    }
}