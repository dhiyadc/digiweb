<?php

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index() {
        $this->load->view('admin/admin_view');
    }

    public function loginadmin() {
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $id_user = $this->Admin_model->getIdUser($username);

        if ($id_user){
            $id = implode($id_user);
        }
        
        $arr = array(
            'username' => $username,
            'password' => $password
        );

        $row = $this->Admin_model->login("admin", $arr)->num_rows();
        
        if($row > 0) {
            $sess = array(
                'user' => $username,
                'id_adm' => $id,
                'status' => "login"
            );

            $this->session->set_userdata($sess);
            $this->session->set_flashdata('message', 'Login berhasil !');
            redirect(base_url("blog"));
        }
        else {
            $this->session->set_flashdata('message', 'Login gagal !');
            $this->load->view('admin/admin_view');
        }

        // $uname = $this->Admin_model->getusername($username);
        // $pword = $this->Admin_model->getpassword($password);
        // $id_user = $this->Admin_model->getIdUser($username);
        // $id_pass = $this->Admin_model->getIdPass($password);

        // if ($uname == null && $pword == null) {
        //     $this->session->set_flashdata('message', 'Login gagal !');
        //     redirect('admin');
        // }
        // if ($uname == null){
        //     $this->session->set_flashdata('message', 'Username belum terdaftar !');
        //     redirect('admin');
        // }
        // if ($pword == null){
        //     $this->session->set_flashdata('message', 'Password salah !');
        //     redirect('admin');
        // }

        //     $sname = implode($uname);
        //     $spass = implode($pword);
        //     $id = implode($id_user);
        
        // if ($id_user == $id_pass && $username == $sname && $password == $spass) {
        //         $sessdata = array (
        //             'user' => $username,
        //             'id_adm' => $id
        //         );
        //         $this->session->set_userdata($sessdata);
        //         $this->session->set_flashdata('message', 'Login berhasil !');
        //         redirect(base_url('blog'));
        // } 
        // else {
        //     $this->session->set_flashdata('message', 'Login gagal !');
        //     $this->load->view('admin/admin_view');
        // }
    }
}
