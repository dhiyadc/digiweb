<?php

class Kelas_admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
    }

    public function index()
    {
        $data['kelas'] = $this->Kelas_model->getAllClass();
        $this->load->view('kelas_admin/index',$data);
    }

    public function create_form()
    {
        $this->load->view('kelas_admin/create_class');
    }

    public function create() {   
        $this->Kelas_model->createClass();
        redirect('kelas_admin');   
    }

    public function delete($id)
    {
        $this->Kelas_model->deleteClass($id);
        redirect('kelas_admin');
    }

    public function update_form($id)
    {
        $data['kelas'] = $this->Kelas_model->getClassById($id);
        $this->load->view('kelas_admin/update_class',$data);
    }

    public function update($id)
    {
        $this->Kelas_model->updateClass($id);
        redirect('kelas_admin/detail_class/' . $id);
    }

    public function detail_class($id)
    {
        $data['kelas'] = $this->Kelas_model->getClassById($id);
        $this->load->view('kelas_admin/detail_class',$data);
    }
}