<?php

class Tentang_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tentang_model', 'tentang');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->viewTentang();
    }
    public function viewTentang()
    {
        $data['tentang'] = $this->tentang->getAllStaff();
        $this->load->view('tentang/user/view_tentang_list', $data);
    }

    public function viewTentangByID($id)
    {
        $data['staff'] = $this->tentang->getStaffbyID($id);
        $this->load->view('tentang/user/view_tentang_detail', $data);
    }

    public function viewTentangByJabatanInti()
    {
        $data['staff'] = $this->tentang->getStaffByJabatanInti();
        $this->load->view('tentang/view_tentang_inti', $data);
    }

    public function viewDeskripsi()
    {
        $data['deskripsi'] = $this->tentang->getdeskripsi();
    }

    public function viewFAQ()
    {
        $data['faq'] = $this->tentang->getallFAQ();
        $this->load->view('tentang/user/view_FAQ', $data);
    }
}
