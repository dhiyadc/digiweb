<?php

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function login()
    {
        $uname = $this->input->post('uname');
        $pass = $this->input->post('pass');
        
        $where = array(
            'username' => $uname,
            'password' => $pass
            );
        $cek = $this->Login_model->cekLogin("admin",$where)->num_rows();
            
        if($cek > 0){
            $data_session = array(
                'username' => $uname,
                'status' => "login"
                );
     
            $this->session->set_userdata($data_session);
     
            redirect(base_url("kelas_admin"));
        }
        else{
            echo "Username dan atau Password salah !";
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}