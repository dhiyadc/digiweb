<?php

class Portofolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Portofolio_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            $this->readPorto();
           
        } else {
            redirect('admin');
        }
    }

    public function readPorto()
    {
        if($this->session->userdata('logged_in'))
        {
            $data['portofolio'] = $this->Portofolio_model->getAllPortofolio();
            $this->load->view('_partials/header_admin');
            $this->load->view('portofolio/portofolio_view', $data);
            $this->load->view('_partials/footer_admin');
        } else {
            redirect('admin');
        }
    }

    public function createPortofolio()
    {
        if ($this->session->userdata('logged_in')) {
            $data['judul'] = 'Create Portofolio';
            $this->form_validation->set_rules('judul', 'Judul', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data['kategori'] = $this->Portofolio_model->getAllKategori();
                $this->load->view('_partials/header_admin');
                $this->load->view('portofolio/create_portofolio',  $data);
                $this->load->view('_partials/footer_admin');
            } else {
                $this->Portofolio_model->createPortofolio();
                $this->session->set_flashdata('create', 'Portofolio berhasil ditambahkan');
                redirect('Portofolio');
            }
        } else {
            redirect('admin');
        }
    }
    public function DeletePortofolio($id)
    {
        if ($this->session->userdata('logged_in')) {
            $this->Portofolio_model->delPortofolio($id);
            $this->session->set_flashdata('delete', 'Portofolio berhasil di delete');
            redirect('Portofolio');
        } else {
            redirect('admin');
        }
    }
    public function ReadPortofolio($id)
    {
        if ($this->session->userdata('logged_in')) {
            $data['judul'] = 'Portofolio';
            $data['portofolio'] = $this->Portofolio_model->getPortobyID($id);
            $this->load->view('_partials/header_admin');
            $this->load->view('portofolio/read_portofolio', $data);
            $this->load->view('_partials/footer_admin');
        } else {
            redirect('admin');
        }
    }
    public function UpdatePortofolio($id)
    {
        if ($this->session->userdata('logged_in')) {
            $data['judul'] = 'Update Portofolio';
            $data['portofolio'] = $this->Portofolio_model->getPortobyID($id);

            $this->form_validation->set_rules('judul', 'Judul', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data['kategori'] = $this->Portofolio_model->getAllKategori();
                $this->load->view('_partials/header_admin');
                $this->load->view('portofolio/update_portofolio', $data);
                $this->load->view('_partials/footer_admin');
            } else {
                $this->Portofolio_model->updatePortofolio($id);

                $this->session->set_flashdata('flash', 'Portofolio berhasil di update');
                redirect('Portofolio/ReadPortofolio/'.$id);
            }
        } else {
            redirect('admin');
        }
    }
}
