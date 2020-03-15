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
        if($this->input->post('submit')){
            $data['keyword'] = $this->input->post('keyword');
        }
        else {
            $data['keyword'] = "";
        }
        $ublog = $this->Blog_user_model->getAllBlog($data['keyword']);
        $this->load->view('blog_user/blog' , ['blog' => $ublog] );
        $this->load->view('layout/footer');
    }

    public function blogdetail($id){
        $this->load->view('layout/header');
        $data['blog'] = $this->Blog_user_model->getDetailBlog($id);
        $data['comment'] =  $this->Blog_user_model->getCommentbyBlogId($id);
        $this->load->view('blog_user/singleblog', $data);
        $this->load->view('layout/footer');
    }

    public function read_blog(){
        $ublog = $this->Blog_user_model->getAllBlog();
        $this->load->view('blog_user/blog' , ['blog' => $ublog]);
    }

    public function createComment($id){
        $name = $this->input->post('nama_komen');
        if(($this->input->post('nama_komen')) == null){
            $name = "Anonim";
        }
        else {
            $name = $this->input->post('nama_komen');
        }

        $this->Blog_user_model->create_comment($id, $name);
        redirect(('Blog/detailAndComment/') . $id);
    }

    public function detailAndComment($id){

        $data['blog'] = $this->Blog_user_model->getDetailBlog($id);
        $data['comment'] =  $this->Blog_user_model->getCommentbyBlogId($id);

        $this->load->view('blog_user/singleblog' , $data);
    }

    public function save_ratingli($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Rating ');
            redirect(('Blog/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBlogli($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatingli($id, $plus);
            $this->session->set_flashdata('Berhasil', 'Terima Kasih Atas Penilaian Anda');
            redirect(('Blog/detailAndComment/') . $id);
        }

    }
    public function save_ratinglo($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Rating');
            redirect(('Blog/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBloglo($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatinglo($id, $plus);
            $this->session->set_flashdata('Berhasil', 'Terima Kasih Atas Penilaian Anda');
            redirect(('Blog/detailAndComment/') . $id);
        }
    }
    public function save_ratingh($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Rating');
            redirect(('Blog/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBlogh($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatingh($id, $plus);
            $this->session->set_flashdata('Berhasil', 'Terima Kasih Atas Penilaian Anda');
            redirect(('Blog/detailAndComment/') . $id);
        }
    }
    public function save_ratingw($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Rating');
            redirect(('Blog/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBlogw($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatingw($id, $plus);
            $this->session->set_flashdata('Berhasil', 'Terima Kasih Atas Penilaian Anda');
            redirect(('Blog/detailAndComment/') . $id);
        }
    }

    public function save_ratings($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Rating');
            redirect(('Blog/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBlogs($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatings($id, $plus);
            $this->session->set_flashdata('Berhasil', 'Terima Kasih Atas Penilaian Anda');
            redirect(('Blog/detailAndComment/') . $id);
        }
    }

    public function save_ratinga($id){

        if(isset($_COOKIE[$id])){
            $this->session->set_flashdata('message', 'Anda Telah Memberikan Rating');
            redirect(('Blog/detailAndComment/') . $id);
        }
        else{
            set_cookie($id, 'liked', time() + 3153600000);
            $data =  $this->Blog_user_model->getRatingBloga($id);
            $plus = implode($data)+1;
            $this->Blog_user_model->updateRatinga($id, $plus);
            $this->session->set_flashdata('Berhasil', 'Terima Kasih Atas Penilaian Anda');
            redirect(('Blog/detailAndComment/') . $id);
        }
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


