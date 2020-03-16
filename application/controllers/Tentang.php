<?php

class Tentang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tentang_model', 'tentang');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            $this->viewTentang();
        } else {
            redirect("admin");
        }
    }

    public function createTentang()
    {
            $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
            $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
            $this->form_validation->set_rules('quote', 'Quote', 'required|trim');
            $this->form_validation->set_rules('ig', 'Instagram', 'trim');
            $this->form_validation->set_rules('fb', 'Facebook', 'trim');
            $this->form_validation->set_rules('twitter', 'Twitter', 'trim');
            if ($this->form_validation->run() == false) {
                $this->load->view('_partials/header_admin');
                $this->load->view('tentang/create_tentang');
                $this->load->view('_partials/footer_admin');
            } else {
                $this->tentang->insertTentang();
                redirect('tentang/viewTentang');
            }
    }

    public function viewTentang()
    {
            $data['tentang'] = $this->tentang->getAllStaff();
            $this->load->view('_partials/header_admin');
            $this->load->view('tentang/view_tentang', $data);
            $this->load->view('_partials/footer_admin');
        
    }

    public function deleteTentang($id)
    {
            $this->tentang->deleteTentang($id);
            redirect('tentang/viewTentang');
        
    }

    public function viewTentangByID($id)
    {
            $data['staff'] = $this->tentang->getStaffbyID($id);
            $this->load->view('_partials/header_admin');
            $this->load->view('tentang/view_tentang_detail', $data);
            $this->load->view('_partials/footer_admin');
        
    }

    public function updateTentang($id)
    {
            $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
            $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
            $this->form_validation->set_rules('quote', 'Quote', 'required|trim');
            $this->form_validation->set_rules('ig', 'Instagram', 'trim');
            $this->form_validation->set_rules('fb', 'Facebook', 'trim');
            $this->form_validation->set_rules('twitter', 'Twitter', 'trim');

            if ($this->form_validation->run() == false) {
                $data['staff'] = $this->tentang->getStaffbyID($id);
                $this->load->view('_partials/header_admin');
                $this->load->view('tentang/update_tentang', $data);
                $this->load->view('_partials/footer_admin');
            } else {
                $this->tentang->updateTentang($id);
                redirect('tentang/viewTentangByID/' . $id);
            }
        
    }

    public function removeImage($id)
    {
        $this->tentang->removeImage($id);
        $data['staff'] = $this->tentang->getStaffbyID($id);
        $this->load->view('tentang/update_tentang', $data);
    }

    public function viewTentangByJabatanInti()
    {
            $data['staff'] = $this->tentang->getStaffByJabatanInti();
            $this->load->view('tentang/view_tentang_inti', $data);
        
    }
}
