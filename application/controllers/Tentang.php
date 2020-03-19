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
        if ($this->session->userdata('logged_in')) {
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
        } else {
            $this->session->set_flashdata('message', "Access Denied");
            redirect('admin');
        }
    }

    public function viewTentang()
    {
        if ($this->session->userdata('logged_in')) {
            $data['tentang'] = $this->tentang->getAllStaff();
            $this->load->view('_partials/header_admin');
            $this->load->view('tentang/view_tentang', $data);
            $this->load->view('_partials/footer_admin');
        } else {
            $this->session->set_flashdata('message', "Access Denied");
            redirect('admin');
        }
    }

    public function deleteTentang($id)
    {
        if ($this->session->userdata('logged_in')) {
            $this->tentang->deleteTentang($id);
            redirect('tentang/viewTentang');
        } else {
            $this->session->set_flashdata('message', "Access Denied");
            redirect('admin');
        }
    }

    public function viewTentangByID($id)
    {
        if ($this->session->userdata('logged_in')) {
            $data['staff'] = $this->tentang->getStaffbyID($id);
            $this->load->view('_partials/header_admin');
            $this->load->view('tentang/view_tentang_detail', $data);
            $this->load->view('_partials/footer_admin');
        } else {
            $this->session->set_flashdata('message', "Access Denied");
            redirect('admin');
        }
    }

    public function updateTentang($id)
    {
        if ($this->session->userdata('logged_in')) {
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
        } else {
            $this->session->set_flashdata('message', "Access Denied");
            redirect('admin');
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
        if ($this->session->userdata('logged_in')) {
            $data['staff'] = $this->tentang->getStaffByJabatanInti();
            $this->load->view('tentang/view_tentang_inti', $data);
        } else {
            $this->session->set_flashdata('message', "Access Denied");
            redirect('admin');
        }
    }

    public function viewDeskripsi()
    {
        if ($this->session->userdata('logged_in')) {
            $data['deskripsi'] = $this->tentang->getdeskripsi();
            $this->load->view('_partials/header_admin');
            $this->load->view('tentang/view_deskripsi_tentang', $data);
            $this->load->view('_partials/footer_admin');
        } else {
            redirect('admin');
        }
    }

    public function updateDeskripsi()
    {
        if ($this->session->userdata('logged_in')) {
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
            if ($this->form_validation->run() == false) {
                $data['deskripsi'] = $this->tentang->getdeskripsi();
                $this->load->view('_partials/header_admin');
                $this->load->view('tentang/update_deskripsi_tentang', $data);
                $this->load->view('_partials/footer_admin');
            } else {
                $this->tentang->updateDeskripsi();
                redirect('tentang/viewDeskripsi');
            }
        } else {
            $this->session->set_flashdata('message', "Access Denied");
            redirect('admin');
        }
    }

    public function viewFAQ()
    {
        if ($this->session->userdata('logged_in')) {
            $data['faq'] = $this->tentang->getallFAQ();
            $this->load->view('_partials/header_admin');
            $this->load->view('tentang/view_FAQ', $data);
            $this->load->view('_partials/footer_admin');
        } else {
            $this->session->set_flashdata('message', "Access Denied");
            redirect('admin');
        }
    }

    public function insertFAQ()
    {
        if ($this->session->userdata('logged_in')) {
            $this->form_validation->set_rules('question', 'question', 'required|trim');
            $this->form_validation->set_rules('answer', 'answer', 'required|trim');
            if ($this->form_validation->run() == false) {
                $this->load->view('_partials/header_admin');
                $this->load->view('tentang/create_FAQ');
                $this->load->view('_partials/footer_admin');
            } else {
                $this->tentang->insertFAQ();
                redirect('tentang/viewFAQ');
            }
        } else {
            redirect('admin');
        }
    }

    public function updateFAQ($id)
    {
        if ($this->session->userdata('logged_in')) {
            $this->form_validation->set_rules('question', 'question', 'required|trim');
            $this->form_validation->set_rules('answer', 'answer', 'required|trim');
            if ($this->form_validation->run() == false) {
                $data['faq'] = $this->tentang->getFAQbyID($id);
                $this->load->view('_partials/header_admin');
                $this->load->view('tentang/update_FAQ', $data);
                $this->load->view('_partials/footer_admin');
            } else {
                $this->tentang->updateFAQ($id);
                redirect('tentang/viewFAQ');
            }
        } else {
            $this->session->set_flashdata('message', "Access Denied");
            redirect('admin');
        }
    }

    public function deleteFAQ($id)
    {
        if ($this->session->userdata('logged_in')) {
            $this->tentang->deleteFAQ($id);
            redirect('tentang/viewFAQ');
        } else {
            $this->session->set_flashdata('message', "Access Denied");
            redirect('admin');
        }
    }
}
