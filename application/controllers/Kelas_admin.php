<?php

class Kelas_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            $this->readKelas();
        } else {
            redirect('admin');
        }
    }

    public function readKelas()
    {
        if ($this->session->userdata('logged_in')) {
            $data['kelas'] = $this->Kelas_model->getAllClass();
            $this->load->view('_partials/header_admin');
            $this->load->view('kelas_admin/index', $data);
            $this->load->view('_partials/footer_admin');
        } else {
            redirect('admin');
        }
    }

    public function create_form()
    {
        if ($this->session->userdata('logged_in')) {
            $data['kategori'] = $this->Kelas_model->getKategori();
            $this->load->view('_partials/header_admin');
            $this->load->view('kelas_admin/create_class', $data);
            $this->load->view('_partials/footer_admin');
        } else {
            redirect('admin');
        }
    }

    public function create()
    {
        if ($this->session->userdata('logged_in')) {
            $this->Kelas_model->createClass();
            $this->session->set_flashdata('create', 'Kelas berhasil di tambahkan');
            redirect('kelas_admin');
        } else {
            redirect('admin');
        }
    }

    public function delete($id)
    {
        if ($this->session->userdata('logged_in')) {
            $this->Kelas_model->deleteClass($id);
            $this->session->set_flashdata('delete', 'Kelas berhasil di delete');
            redirect('kelas_admin');
        } else {
            redirect('admin');
        }
    }

    public function update_form($id)
    {
        if ($this->session->userdata('logged_in')) {
            $data['kelas'] = $this->Kelas_model->getClassById($id);
            $data['kategori'] = $this->Kelas_model->getKategori();
            $this->load->view('_partials/header_admin');
            $this->load->view('kelas_admin/update_class', $data);
            $this->load->view('_partials/footer_admin');
        } else {
            redirect('admin');
        }
    }

    public function update($id)
    {
        if ($this->session->userdata('logged_in')) {
            $this->Kelas_model->updateClass($id);
            $this->session->set_flashdata('flash', 'Kelas berhasil di update');
            redirect('kelas_admin/detail_class/' . $id);
        } else {
            redirect('admin');
        }
    }

    public function detail_class($id)
    {
        if ($this->session->userdata('logged_in')) {
            $data['kelas'] = $this->Kelas_model->getClassById($id);
            $this->load->view('_partials/header_admin');
            $this->load->view('kelas_admin/detail_class', $data);
            $this->load->view('_partials/footer_admin');
        } else {
            redirect('admin');
        }
    }
}
