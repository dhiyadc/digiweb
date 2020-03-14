<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_model');
        $this->load->model('Blog_user_model');
    }

    public function index(){
        //Controller Home
        $this->load->view('layout/header');
        $this->load->view('blog/blog');
        $this->load->view('layout/footer');
    }

    public function blogdetail(){
        $this->load->view('layout/header');
        $this->load->view('blog/singleblog');
        $this->load->view('layout/footer');
    }
  
    public function createview() {
        $this->load->view('_partials/header_admin');
        $this->load->view('blog/create_blog');
        $this->load->view('_partials/footer_admin');
    }

    public function createblog() {
        $this->Blog_model->createblog();

        $id = $this->Blog_model->getLastId();
        $this->Blog_user_model->createRating(implode($id));
        redirect('blog/readblog');
    }

    public function readblog() {
        $blogg = $this->Blog_model->getAllBlog();
        $this->load->view('_partials/header_admin');
        $this->load->view('blog/read_blog', ['blog' => $blogg]);
        $this->load->view('_partials/footer_admin');
    }

    public function deleteblog($id) {
        $this->Blog_model->deleteblogg($id);
        $this->session->set_flashdata('message', 'Blog Terhapus !');
        redirect(base_url('blog/readblog'));
    }

    public function fullDetail($id) {
        $data['blog'] = $this->Blog_model->getDetailByID($id);
        $data['comment'] = $this->Blog_model->getCommentById($id);
        $data['rateli'] = $this->Blog_model->getRatingBlogli($id);
        $data['ratelo'] = $this->Blog_model->getRatingBloglo($id);
        $data['rateh'] = $this->Blog_model->getRatingBlogh($id);
        $data['ratew'] = $this->Blog_model->getRatingBlogw($id);
        $data['rates'] = $this->Blog_model->getRatingBlogs($id);
        $data['ratea'] = $this->Blog_model->getRatingBloga($id);
        
        $this->load->view('_partials/header_admin');
        $this->load->view('blog/detail_view', $data);
        $this->load->view('_partials/footer_admin');
    }

    public function deleteComment($id, $id_blog) {
        $this->Blog_model->delete_comment($id);
        $this->session->set_flashdata('message', 'Komentar terhapus!');
        redirect('Blog/fullDetail/' . $id_blog);
    }

    public function update($id) {
        $ublog = $this->Blog_model->GetBlogById($id);
        $this->load->view('_partials/header_admin');
        $this->load->view('blog/update_blog', ['blog' => $ublog]);
        $this->load->view('_partials/footer_admin');
    }

    public function updateblog($id) {
        $this->Blog_model->updateeBlog($id);
        redirect(base_url('blog/readblog'));
    }

}

