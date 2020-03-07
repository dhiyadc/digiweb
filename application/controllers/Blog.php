<?php

class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_model');
    }

    public function index() {
        if (!($this->session->userdata('user'))) {
            redirect('admin');
        }
        $this->load->view('blog/option');
    }

    public function createview() {
        if (!($this->session->userdata('user'))) {
            redirect('admin');
        }
        $this->load->view('blog/create_blog');
    }

    public function createblog() {
        if (!($this->session->userdata('user'))) {
            redirect('admin');
        }
        $this->Blog_model->createblog();
        redirect('blog/readblog');
    }

    public function readblog() {
        if (!($this->session->userdata('user'))) {
            redirect('admin');
        }
        $blogg = $this->Blog_model->getAllBlog();
        $this->load->view('blog/read_blog', ['blog' => $blogg]);
    }

    public function deleteblog($id) {
        if (!($this->session->userdata('user'))) {
            redirect('admin');
        }
        $this->Blog_model->deleteblogg($id);
        $this->session->set_flashdata('message', 'Blog Terhapus !');
        redirect(base_url('blog/readblog'));
    }

    public function detailblog($id) {
        if (!($this->session->userdata('user'))) {
            redirect('admin');
        }
        $data['blog'] = $this->Blog_model->getDetailByID($id);
        $this->load->view('blog/detail_view', $data);
    }

    public function update($id) {
        if (!($this->session->userdata('user'))) {
            redirect('admin');
        }
        $ublog = $this->Blog_model->GetBlogById($id);
        $this->load->view('blog/update_blog', ['blog' => $ublog]);
    }

    public function updateblog($id) {
        if (!($this->session->userdata('user'))) {
            redirect('admin');
        }
        $this->Blog_model->updateeBlog($id);
        redirect(base_url('blog/readblog'));
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('admin');
    }

}
